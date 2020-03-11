<!DOCTYPE html>
 
<head>
  <title>n-Puzzle Game</title>
  <script src='api.js'></script>
</head>
<body>
    <div id='output'>
    </div>
</body>
 
<script>
    var __message = '';
    function print_message(m)
    {
        __message += m + '<br>';
        document.getElementById('output').innerHTML = __message;
    }
     
    var SIZE = 3;  // 3 x 3 game board
    var EMPTY_CELL = 0;
     
    var visited_queue = new Queue();
    var expanded_queue = new Queue();// Queue also can be used
     
    var board = initial_board(SIZE);  // get the initial board
    print_message('Initial board = ' + board);
     
    //first time
    var current_board = board;
    var node = {
        id: get_id_of_board(current_board),  // get_id_of_board() should be implemented
        board: current_board, 
        gvalue: 0, 
        hvalue: get_heuristic_value(current_board),  // get_heuristic_value() should be implemented
        fvalue: 0 + get_heuristic_value(current_board), 
        parent: null  // to keep the track of path from the initial board to the goal board
    };
    visited_queue.push(node.id, node.fvalue, node);  // node.fvalue is the priority
     
     
    //expanded_queue.push(id, p, obj)
    while ( !is_final_state(node.board))//if current_board is solved (goal)
    {   
        get_neighbor_node(node);
 
        //select next node to visit:
        node = expanded_queue.popTheHighestPriorityOne();
        console.log('best value of g ' +node.id);
        current_board = visited_queue.push(node.id,node.fvalue,node);
         
         
    }
     
    /*
    *   Put the boards on the solution path into a queue
    */
    var path = [];
    path.push(node.board);  // node is the goal node.
    while (node.parent != null) {
       node = node.parent;
       path.push(node.board);
    }
     
    /*
    *   Print the boards from the initial board to the goal board
    */
    var g =0;
    for (var i = path.length-1; i >=0; i--) 
    {   
        print_message('tree level ' + g + ' = '  + path[i]);
        g++;
    }
    print_message('END');
     
    function get_id_of_board(board){
        var str ="";
        for(var i = 0; i < board.length; i++){
            str += board[i];
        }
        console.log(str);
        return parseInt(str);
    }
     
    function put_in_queue(current_node, expanded_board)
    {
        if (!visited_queue.isIn(get_id_of_board(expanded_board)))
        {
            var expanded_node = 
            {
                id: get_id_of_board(expanded_board), 
                board: expanded_board, 
                gvalue: current_node.gvalue + 1, 
                hvalue: get_heuristic_value(expanded_board), 
                fvalue: current_node.gvalue + 1 + get_heuristic_value(expanded_board), 
                parent: current_node
            };
                 
            if (expanded_queue.isIn(expanded_node.id)) 
            {
                var temp_node = expanded_queue.get(expanded_node.id);
                console.log(expanded_node.gvalue + '<' + temp_node.gvalue);
                if (expanded_node.gvalue < temp_node.gvalue)
                {
                    console.log('a better g value, update');
                    expanded_queue.update(expanded_node.id, expanded_node.fvalue, expanded_node);
                     
                }
            }
            else{
                console.log('a new state, add');
                expanded_queue.push(expanded_node.id, expanded_node.fvalue, expanded_node);
            }
        }
    }
     
    function get_neighbor_node(puzzle){
        var empty = puzzle.board.indexOf(0);
        //empty index to decide where it can move
        console.log('index of 0: '+empty);
;       if(empty == 0){
            //first cell 
            put_in_queue(puzzle, exchange(0,1,puzzle.board));
            put_in_queue(puzzle, exchange(0,3,puzzle.board));
        }else if(empty == 1){
            put_in_queue(puzzle, exchange(1,0,puzzle.board));
            put_in_queue(puzzle, exchange(1,4,puzzle.board));
            put_in_queue(puzzle, exchange(1,2,puzzle.board));
        }else if(empty == 2){
            put_in_queue(puzzle, exchange(2,1,puzzle.board));
            put_in_queue(puzzle, exchange(2,5,puzzle.board));
        }else if(empty == 3){
            put_in_queue(puzzle, exchange(3,0,puzzle.board));
            put_in_queue(puzzle, exchange(3,4,puzzle.board));
            put_in_queue(puzzle, exchange(3,6,puzzle.board));
        }else if(empty == 4){
            put_in_queue(puzzle, exchange(4,1,puzzle.board));
            put_in_queue(puzzle, exchange(4,5,puzzle.board));
            put_in_queue(puzzle, exchange(4,7,puzzle.board));
            put_in_queue(puzzle, exchange(4,3,puzzle.board));
        }else if(empty == 5){
            put_in_queue(puzzle, exchange(5,2,puzzle.board));
            put_in_queue(puzzle, exchange(5,8,puzzle.board));
            put_in_queue(puzzle, exchange(5,4,puzzle.board));
        }else if(empty == 6){
            put_in_queue(puzzle, exchange(6,7,puzzle.board));
            put_in_queue(puzzle, exchange(6,3,puzzle.board));
        }else if(empty == 7){
            put_in_queue(puzzle, exchange(7,4,puzzle.board));
            put_in_queue(puzzle, exchange(7,6,puzzle.board));
            put_in_queue(puzzle, exchange(7,8,puzzle.board));
        }else if(empty == 8){
            put_in_queue(puzzle, exchange(8,7,puzzle.board));
            put_in_queue(puzzle, exchange(8,5,puzzle.board));
             
        }
    }
     
    function exchange(i,j,puzzle)//swap tile with EMPTY_CELL
    {
        var temp_board = [];
        for (var x = 0; x < puzzle.length; x++)
            temp_board[x] = puzzle[x];
             
        var temp = temp_board[i];
        temp_board[i] = temp_board[j];
        temp_board[j] = temp;
         
        return temp_board;
    }
         
    //Manhatan function
    function get_heuristic_value(state) 
    {
        var tboard = state;
        var distance = 0;
 
        // the heuristic of the Manhatan distance
        for (var i = 0; i < tboard.length; i++)
            if (tboard[i] != EMPTY_CELL) {
                if (tboard[i]-1 != i) {
                    var c_row, c_col, t_row, t_col;
                    c_row = Math.floor(i / SIZE); c_col = i % SIZE; 
                    t_row = Math.floor((tboard[i]-1) / SIZE); t_col = (tboard[i]-1) % SIZE; 
                    distance += Math.abs(c_row - t_row) + Math.abs(c_col - t_col);
            }
        }
 
    return distance;
 
    }
     
    //check if is goal
    function is_final_state(state) 
    {
      for (var i = 0; i < SIZE*SIZE-1; i++)  // should be length-1, not length
        if (state[i]-1 != i)
          return false;
      return true;  // 1 2 3 4 ... empty
    }
     
</script>