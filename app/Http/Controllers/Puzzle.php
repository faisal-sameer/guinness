<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Puzzle extends Controller
{

	
//	var $key = array_search(0,$mystate);
    public function puzzle8( ){//bfs
		 $goal =    [1,2,3
		,4,5,6,
		7,8,0];
		 $mystate = [1,0,2
		 ,4,5,3
		 ,7,8,6];
		 $steps = 0 ;
		 $bad = 0 ;
		 
		 $fringe = [];
		 $depth = 0 ;
		 $new = [] ;
		 $key = 0;
		 $string = " ";
		 $openNode = [];
		 $oldstate = [];
		 
		 $start_time = microtime(true); 
		 

		for($i = 0 ; $i<=8 ; $i ++){
			if($mystate[$i] == $goal[$i]){
				$steps ++ ;
			}else{
				$bad++ ;
				$key = array_search(0,$mystate);// zero postion 

				
				for($j = 0 ; $j <= 8 ; $j++){
					if($mystate!=$goal){
					$key = array_search(0,$mystate);// zero postion 

				// need var for root and other for next root 
				// and for loop for each postion to search all the nodes in the that postions 
				// 
				if($key == 5){// zero in postion 5
					$fringe[] = 2;
					$fringe[] = 4;
					$fringe[] = 8;
					for($five = 0 ; $five <= 2 ; $five++){
						$oldstate = $mystate;
						//$mystate = $oldstate;
						if(2 == $fringe[0]){
							$new = $mystate;
							$new[2] = $mystate[5];
							$new[5]= $mystate[2] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}					

						}else if (4 == $fringe[0]){
							$new = $mystate;
							$new[4] = $mystate[5];
							$new[5]= $mystate[4] ;
						
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{

								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}else if (8 == $fringe[0]){
							$new = $mystate;
							$new[8] = $mystate[5];
							$new[5]= $mystate[8] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{
							
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}

					}
					$depth ++ ;
				
				}else if ($key == 4){ // zero in postion 4
					$fringe[] = 1;
					$fringe[] = 3;
					$fringe[] = 5;
					$fringe[] = 7;
					for($four = 0 ; $four <= 3 ; $four++){
						$oldstate = $mystate;
						
						if(1 == $fringe[0]){
							$new = $mystate;
							$new[4] = $mystate[1];
							$new[1]= $mystate[4] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{

								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}else if(3 == $fringe[0]){
							$new = $mystate;
							$new[4] = $mystate[3];
							$new[3]= $mystate[4] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{

								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}
						else if(5 == $fringe[0]){
							$new = $mystate;
							$new[2] = $mystate[5];
							$new[5]= $mystate[2] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}
					}
				
					$depth ++ ;


				}
				else if ($key==3){// zero postions 3 
					$fringe[]=0;
					$fringe[]=4;
					$fringe[]=6;
					for($three=0;$three<=2;$three++){
                        if(0==$fringe[0]){
							$new = $mystate;
							$new[3]=$mystate[0];
							$new[0]=$mystate[3];
							if($new== $goal){
								$mystate=$new;
								$openNode[]=$fringe[0];
								array_shift($fringe);

							}
							else{
								$openNode[]=$fringe[0];
								array_shift($fringe);

							}
						}
						else if (4 == $fringe[0]){
							$new = $mystate;
							$fringe[3]=$fringe[4];
							$fringe[4]=$fringe[3];
							if($new == $goal){
								$mystate=$new;
								$openNode[]=$fringe[0];
								array_shift($fringe);
							}
							else{
								$openNode[]=$fringe[0];
								array_shift($fringe);
							}
						}
						else if (6 == $fringe[0]){
							$new = $mystate;
							$fringe[3]=$fringe[6];
							$fringe[6]=$fringe[3];
							if($new == $goal){
								$mystate=$new ;
								$openNode[]=$fringe[0];
								array_shift($fringe);
							
							}
							else{
								$openNode[]=$fringe[0];
								array_shift($fringe);
								
							}
						}

					}
					$depth ++ ;

					}
					
				else if ($key == 2){ // zero in postion 2 
					$fringe[] = 1;
					$fringe[] = 5;
					for($two = 0 ; $two <= 1 ; $two++){
						$oldstate = $mystate;
						
						if(1 == $fringe[0]){
							$new = $mystate;
							$new[2] = $mystate[1];
							$new[1]= $mystate[2] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}else if(5 == $fringe[0]){
							$new = $mystate;
							$new[2] = $mystate[5];
							$new[5]= $mystate[2] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{
								$mystate = $new ;

								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}
					}
				
					$depth ++ ;

				}else if ($key == 1){ // zero in postion 1 
					

				$fringe[] = 0;
					$fringe[] = 2;
					$fringe[] = 4;
					for($one = 0 ; $one <= 2 ; $one++){
						$oldstate = $mystate;
						
						if(1 == $fringe[0]){
							$new = $mystate;
							$new[0] = $mystate[1];
							$new[1]= $mystate[0] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{
							
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}else if(2 == $fringe[0]){
							$new = $mystate;
							$new[2] = $mystate[1];
							$new[1]= $mystate[2] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
								$view = $new .' '. $view ;
							}else{
							
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}else if(4 == $fringe[0]){
							$new = $mystate;
							$new[4] = $mystate[1];
							$new[1]= $mystate[4] ;
							if($new == $goal){
								$mystate = $new ;
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}else{
							
								$openNode[] = $fringe[0];
								array_shift($fringe);
							}
						}
					}
				
					$depth ++ ;
				}else if ($key == 6){ // zero in postion 6
					

						$fringe[] = 3;
						$fringe[] = 7;
						for($one = 0 ; $one <= 1 ; $one++){
							$oldstate = $mystate;
							
							if(3 == $fringe[0]){
								$new = $mystate;
								$new[6] = $mystate[3];
								$new[3]= $mystate[6] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}else if(7 == $fringe[0]){
								$new = $mystate;
								$new[6] = $mystate[7];
								$new[7]= $mystate[6] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}
							}
						
					
						$depth ++ ;
					}
					else if ($key == 7){ // zero in postion 7
					

						$fringe[] = 4;
						$fringe[] = 6;
						$fringe[] = 8;
						for($seven = 0 ; $seven <= 2 ; $seven++){
							$oldstate = $mystate;
							
							if(4 == $fringe[0]){
								$new = $mystate;
								$new[7] = $mystate[4];
								$new[4]= $mystate[7] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
								
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}else if(6 == $fringe[0]){
								$new = $mystate;
								$new[7] = $mystate[6];
								$new[6]= $mystate[7] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}else if(8 == $fringe[0]){
								$new = $mystate;
								$new[7] = $mystate[8];
								$new[8]= $mystate[7] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
									$view = $new .' '. $view ;
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}
						}
					
						$depth ++ ;
					}else if ($key == 8){ // zero in postion 8
					

						$fringe[] = 5;
						$fringe[] = 7;
						for($eghit = 0 ; $eghit <= 1 ; $eghit++){
							$oldstate = $mystate;
							
							if(5 == $fringe[0]){
								$new = $mystate;
								$new[8] = $mystate[5];
								$new[5]= $mystate[8] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}else if(7 == $fringe[0]){
								$new = $mystate;
								$new[8] = $mystate[7];
								$new[7]= $mystate[8] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}
							}
						
					
						$depth ++ ;
					}else if ($key == 0){ // zero in postion 0
					

						$fringe[] = 1;
						$fringe[] = 3;
						for($zero = 0 ; $zero <= 1 ; $zero++){
							$oldstate = $mystate;
							if(1 == $fringe[0]){
								$new = $mystate;
								$new[0] = $mystate[1];
								$new[1]= $mystate[0] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}else if(3 == $fringe[0]){
								$new = $mystate;
								$new[0] = $mystate[3];
								$new[3]= $mystate[0] ;
								if($new == $goal){
									$mystate = $new ;
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}else{
									$openNode[] = $fringe[0];
									array_shift($fringe);
								}
							}
							}
						
					
						$depth ++ ;
					}
				}else{
				break;
				}

			}
		

			
		}
			if($steps == 8 ){
				$string = "found Goal ";
			}

		}
		$end_time = microtime(true); 
		$execution_time = ($end_time - $start_time)*60;

		$arr = Array('steps'=>$steps , 'bad'=>$bad  , 'key'=>$key , 'mystate'=>$mystate,
		 'fringe'=>$fringe , 'string'=>$string , 'depth'=>$depth , 'openNode'=>$openNode  , 'execution_time'=>$execution_time);


        return view('puzzle' , $arr);

	}





	public function DFS(){
		$goal =    [1,2,3
	   ,4,5,6,
	   7,8,0];
		$mystate =[1,2,3
				  ,4,5,0
				  ,7,8,6];
		$steps = 0 ;
		$bad = 0 ;
		$step = " ";
	//	$fringe =  [];
		$depth = 0 ;
		$new = [] ;
		$key = 0;
		$string = " ";
		$openNode = array();
		$oldstate = [];
		$fringe = array();
		$start_time = microtime(true); 
		$openNode[0]=[] ;
		$openNode[1]=[] ;
		$openNode[2]=[] ;
		$openNode[3]=[] ;
		$openNode[4]=[] ;
		$openNode[5]=[] ;
		$openNode[6]=[] ;
		$openNode[7]=[] ;
		$openNode[8]=[] ;

	  
		if($mystate == $goal){
			$string = "State equal Goal !!";
		}else{
			for($i = 0 ; $i <=3 ; $i++){
			$key = array_search(0,$mystate);// zero postion 
		
			if($key == 5){// postion 5 (2 , 4 , 8)
				$openNode[5]=$mystate;
			
					$new = $mystate ;
			$new[5] = $mystate[2];  
			$new[2] = $mystate[5];
			if($openNode[2] != $new ){
				if($new == $goal){
					$mystate = $new ; 
					$fringe[2] = $new;
					$openNode[2] = $new; 
					}else{
						$mystate = $new ; 
						$fringe[2]= $new;
						$openNode[2] = $new; 
					}

				}else if($openNode[2]== $new){
				
				 
				$new = $mystate ;
			$new[5] = $mystate[4];  
			$new[4] = $mystate[5];
			if ($openNode[4] !=  $new){
				if($new == $goal){
					$mystate = $new ; 
					$fringe[4] = $new;
					$openNode[4] = $new; 
					}else{
						$mystate = $new ; 
						$fringe[4]= $new;
						$openNode[4] = $new; 
					}

				}else if ($openNode[4]== $new) {
				
					$new = $mystate ;
				$new[5] = $mystate[8];  
				$new[8] = $mystate[5];
				if ($openNode[8]!=  $new){
					if($new == $goal){
						$mystate = $new ; 
						$fringe[8] = $new;
						$openNode[8] = $new; 
						}else{
							$mystate = $new ; 
							$fringe[8]= $new;
							$openNode[8] = $new; 
						}
					}
				}
			}
				$depth++;





			}else if($key == 2){// postion 5 (1 , 5)
				$openNode[2]=$mystate;

				

				$new = $mystate ;
				$openNode[2] = $new;
				$new[2] = $mystate[1];  
				$new[1] = $mystate[2];
				if($openNode[1] != $new ){
					if($new == $goal){
					$mystate = $new ; 
					$fringe[1] = $new;
					$openNode[1] = $new; 
					}else{
						$mystate = $new ; 

						$fringe[1]= $new;
						$openNode[1] = $new; 
					}
				 }else if ($openNode[1]== $new){
					
				
					$new = $mystate ;
				$openNode[5] = $new;
				$new[2] = $mystate[5];  
				$new[5] = $mystate[2];
				 if ($openNode[5] != $new ){
					if($new == $goal){
					$mystate = $new ; 
					$fringe[5] = $new;
					$openNode[5] = $new; 
					}else{
						$mystate = $new ; 

						$fringe[5]= $new;
						$openNode[5] = $new; 
 
					}
					
				}
			}
					$depth++;

				}
				else if($key == 1){// postion 1 (0 , 2 , 4)
					$openNode[1]=$mystate;


							$new = $mystate ;
							$openNode[1] = $new;
							$new[1] = $mystate[0];  
							$new[0] = $mystate[1];
							if($openNode[0] != $new){
								if($new == $goal){
								$mystate = $new ; 
								$fringe[0] = $new;
								$openNode[0] = $new; 
								}else{
									$mystate = $new ; 
									$fringe[0] = $new;
									$openNode[0] = $new; 
			 
								}

						}else if ($openNode[0]== $new){
							$new = $mystate ;
							$openNode[1] = $new;
							$new[1] = $mystate[2];  
							$new[2] = $mystate[1];
							if ($openNode[2] != $new ){
							if($new == $goal){
								$mystate = $new ; 
								$fringe[2] = $new;
								$openNode[2] = $new; 
								}else{
									$mystate = $new ; 
									$fringe[2]= $new;
									$openNode[2] = $new; 
			 
								}


						}else if ($openNode[2]== $new){
							$new = $mystate ;
							$openNode[4] = $new;
							$new[1] = $mystate[4];  
							$new[4] = $mystate[1];
							if ($openNode[4] != $new ){
							if($new == $goal){
								$mystate = $new ; 
								$fringe[4] = $new;
								$openNode[4] = $new; 
								}else{
									$mystate = $new ; 
									$fringe[4]= $new;
									$openNode[4] = $new; 
			 
								}
							}
						}
							}
					$depth++;

				}
				else if($key == 0){// postion 0 (1 , 3 )
					$openNode[0]=$mystate;

					$new = $mystate ;
					$openNode[1] = $new;
					$new[1] = $mystate[0];  
					$new[0] = $mystate[1];
					if($openNode[1] != $new){

						if($new == $goal){
						$mystate = $new ; 
						$fringe[1] = $new;
						$openNode[1] = $new; 
						}else{
							$mystate = $new ; 
							$fringe[1]= $new;
							$openNode[1] = $new; 
	 
						}
					}else if($openNode[1]==$new){ 

						$new = $mystate ;
					$openNode[3] = $new;
					$new[3] = $mystate[0];  
					$new[0] = $mystate[3];
					if ($openNode[3] != $new){
						if($new == $goal){
						$mystate = $new ; 
						$fringe[3] = $new;
						$openNode[3] = $new; 
						}else{
							$mystate = $new ; 
							$fringe[3]= $new;
							$openNode[3] = $new; 
	 
						}
					}
				}
				$depth++;

		 }else if($key == 3){// postion 3 (0 , 4 , 6 )
			
			$openNode[3]=$mystate;

			
			$new = $mystate ;
			$openNode[0] = $new;
			$new[0] = $mystate[3];  
			$new[3] = $mystate[0];
			if($openNode[0] != $new){
				if($new == $goal){
				$mystate = $new ; 
				$fringe[3] = $new;
				$openNode[3] = $new; 
				}else{
					$mystate = $new ; 
					$fringe[3]= $new;
					$openNode[3] = $new; 

				}
			}else if ($openNode[0] == $new){
				$new = $mystate ;
			$openNode[4] = $new;
			$new[4] = $mystate[3];  
			$new[3] = $mystate[4];
			if($openNode[4] != $new){
				if($new == $goal){
				$mystate = $new ; 
				$fringe[4] = $new;
				$openNode[4] = $new; 
				}else{
					$mystate = $new ; 
					$fringe[4]= $new;
					$openNode[4] = $new; 

				}
			}
		}
		$depth++;

 }
		}



		 if($mystate == $goal ){
			$string ="found goal ";
		}else{
			$string = "Goal not found ";
		}

		}

		
		 
		






			$end_time = microtime(true); 
		$execution_time = ($end_time - $start_time)*60;
			$arr = Array('steps'=>$steps , 'bad'=>$bad  , 'key'=>$key , 'mystate'=>$mystate,
			'fringe'=>$fringe , 'string'=>$string , 'depth'=>$depth , 'openNode'=>$openNode , 'execution_time'=>$execution_time);
   
	
			return view('puzzle' , $arr);
	
		}
	}
   
	









/*


		for($i = 0 ; $i<=8 ; $i ++){
		   if($mystate[$i] == $goal[$i]){
			   $steps ++ ;
		   }else{
			   $bad++ ;

			   for($i = 0 ; $i<=8 ; $i ++){
				if($mystate[$i] == $goal[$i]){
					$steps ++ ;
				}else{
					$bad++ ;
					for($j = 0 ; $j <= 8 ; $j++){
					$key = array_search(0,$mystate);// zero postion 
					// need var for root and other for next root 
					// and for loop for each postion to search all the nodes in the that postions 
					// $root = $key ; 
					
					if($key == 5){// zero in postion 5
						$fringe[] = 2;
						$fringe[] = 4;
						$fringe[] = 8;
						$new = $mystate;
							$new[5] = $mystate[2];
							$new[2]= $mystate[5] ;
							$mystate = $new ;
							$depth ++ ;

					}
					else if ($key == 3){
						$fringe[]=0;
						$fringe[]=4;
						$fringe[]=6;
						$new =$mystate;
	
						$new [3]=$mystate[0];
						$new [0]=$mystate[3];
						$mystate =$new ;
						$depth ++;
	
					}
	
					else if ($key == 6 ){
				 $fringe[]=3;
				 $fringe[]=7;
	
				 $new =$mystate;
				  $new[6]=$mystate[3];
				  $new[3]=$mystate[6];
				  $mystate =$new ;
				  $depth ++ ;
	
					}
					
					 else if ($key == 7){
						$fringe[] = 4;
						$fringe[] = 6;
						$fringe[] = 8;
						$new = $mystate;
						$new[7] = $mystate[4];
						$new[4]= $mystate[7] ;
						$mystate = $new ;
						$depth ++ ;
					
					 }
					
					 else if ($key == 4){
						$fringe[] = 1;
						$fringe[] = 3;
						$fringe[] = 5;
						$fringe[] = 7;
						$new = $mystate;
						$new[4] = $mystate[1];
						$new[1]= $mystate[4] ;
						$mystate = $new ;
						$depth ++ ;
					
					 }
					
					else if ($key == 2){ // zero in postion 2 
						$fringe[] = 1;
						$fringe[] = 5;
						$fringe[] = 2;
						$myarray[3] = $mystate;

						$new = $mystate;
						$new[2] = $mystate[1];
						$new[1]= $mystate[2] ;
						
						$myarray[0] = $new;
						
						$new = $mystate;

						$new[2] = $mystate[5];
						$new[5]= $mystate[2] ;

						$myarray[1] = $new;
						$mystate =$new;


						$mystate =$new;
						$new[5] = $mystate[2];
						$new[2]= $mystate[5] ;
						$myarray[2] = $new;
						if($myarray[2]==$myarray[3]){
							$openNode[] = 2;
								$string = "Loop";
						}else{
							$string = "no Loop ";
						}

						



						//$fringe[] = $myarray[0];

					}else if ($key == 1){ // zero in postion 1 
						$fringe[] = 0;
						$fringe[] = 2;
						$fringe[] = 4;
						$new = $mystate;
						$new[1] = $mystate[0];
						$new[0]= $mystate[1] ;
						$mystate = $new ;
						$depth ++ ;
					}else if ($key == 0){ // zero in postion 1 
						$fringe[] = 1;
						$fringe[] = 3;
						$new = $mystate;
						$new[1] = $mystate[0];
						$new[0]= $mystate[1] ;
						$mystate = $new ;
						$depth ++ ;
					}
	
					
	
				}
			}
				if($steps == 8 ){
					$string = "found Goal ";
				}
	
			}


*/