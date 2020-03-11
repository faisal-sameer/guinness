<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stu_tables;
use App\StuBarcode;


class InsertStu extends Controller
{
 
    
    protected function viewInsertPage (){
        
        return view ('InsertSTU');
    }

    protected function InsertStu(Request $request){


        $new = new  Stu_tables();
        $new->stu_name = $request->student_name;
        $new->school_name = $request->school_name;
        $new->user_id = auth()->user()->id;
        $new->save();

        $barcode = new StuBarcode();
        $barcode->stu_id = $new->id;
        $barcode->attend = 0 ;
        $barcode->save();

        return 'oh yes!';


        
    }

    protected function counts(){
        $count =Stu_tables::all() ;


    return view ('count')->with('count',$count);
    }

    protected function changeSchoolName(){

        Stu_tables::where('id','!=',-1)
        ->update(['school_name'=>'UQU']);


        return 'Done' ;

    }

    protected function Astar(){
        $goal =    [1,2,3
		            ,4,5,6,
                    7,8,0];
                    
         $mystate = [4,1,2
                    ,7,0,3
                    ,8,5,6];
        $currentState = [];// h(n)
        $depth = 0 ; //g(n)
        $maxDepth = 10 ; 
        $path = 0 ; // f(n)
        $fringe =[];
        $openNode = array();
        $key= 0 ;
        $f ="";

        for($i = $depth ;$i<=100;$i++){
            $Stepaway1 = 0 ;
            $Stepaway2 = 0 ;
            $Stepaway3 = 0 ;
            $Stepaway4 = 0 ;

            $key = array_search(0,$mystate);// zero postion 

            if($key == 5){// 0 in potions 5 (2,4,8)
                $fringe[]=2;
                $fringe[]=4;
                $fringe[]=8;

                $currentState = $mystate;
                $currentState[5] = $mystate[2]; 
                $currentState[2] = $mystate[5];
                for($two = 0 ; $two <= 8 ;$two++){
                    if($currentState[$two] != $goal[$two]){
                        $Stepaway1++ ; 
                    }
                }

                $currentState = $mystate;
                $currentState[5] = $mystate[4]; 
                $currentState[4] = $mystate[5];
                for($fore = 0 ; $fore <= 8 ;$fore++){
                    if($currentState[$fore] != $goal[$fore]){
                        $Stepaway2++  ; // f(n) = 1 + 3  -> 
                    }
                }
                
                $currentState = $mystate;
                $currentState[5] = $mystate[8]; 
                $currentState[8] = $mystate[5];
                for($five = 0 ; $five <= 8 ;$five++){
                    if($currentState[$five] != $goal[$five]){
                        $Stepaway3 ++  ; // f(n)= 1 + 0 goal 
                    }
                }

               $min =  min($Stepaway1,$Stepaway2,$Stepaway3);

                
                

               if($Stepaway1 == $min){
                $currentState = $mystate;
            $currentState[5] = $mystate[2]; 
            $currentState[2] = $mystate[5];
                $mystate = $currentState ;
                $openNode[] = $currentState;
            }
            
           else  if ($Stepaway2 == $min){
                $currentState = $mystate;
            $currentState[5] = $mystate[4]; 
            $currentState[4] = $mystate[5];
                $mystate = $currentState ;
                $openNode[] = $currentState;

            }
            
            else if ($Stepaway3 == $min){
            $currentState = $mystate;
            $currentState[5] = $mystate[8]; 
            $currentState[8] = $mystate[5];
                $mystate = $currentState ;
                $openNode[] = $currentState;

            }

            
            $depth++;


            }

            if($key == 4){// 0 in potions 4 (1,3,5,7)
                $fringe[]=1;
                $fringe[]=3;
                $fringe[]=5;
                $fringe[]=7;

                $currentState = $mystate;
                $currentState[4] = $mystate[1]; 
                $currentState[1] = $mystate[4];
                for($one = 0 ; $one <= 8 ;$one++){
                    if($currentState[$one] != $goal[$one]){
                        $Stepaway1++ ; 
                    }
                }

                $currentState = $mystate;
                $currentState[4] = $mystate[3]; 
                $currentState[3] = $mystate[4];
                for($three = 0 ; $three <= 8 ;$three++){
                    if($currentState[$three] != $goal[$three]){
                        $Stepaway2++  ; // f(n) = 1 + 3  -> 
                    }
                }
                
                $currentState = $mystate;
                $currentState[4] = $mystate[5]; 
                $currentState[5] = $mystate[4];
                for($five = 0 ; $five <= 8 ;$five++){
                    if($currentState[$five] != $goal[$five]){
                        $Stepaway3 ++  ; // f(n)= 1 + 0 goal 
                    }
                }

                
                $currentState = $mystate;
                $currentState[4] = $mystate[7]; 
                $currentState[7] = $mystate[4];
                for($seven = 0 ; $seven <= 8 ;$seven++){
                    if($currentState[$seven] != $goal[$seven]){
                        $Stepaway3 ++  ; // f(n)= 1 + 0 goal 
                    }
                }
               $min =  min($Stepaway1,$Stepaway2,$Stepaway3,$Stepaway4);

                
                

               if($Stepaway1 == $min){
                $currentState = $mystate;
            $currentState[4] = $mystate[1]; 
            $currentState[1] = $mystate[4];
                $mystate = $currentState ;
                $openNode[] = $currentState;

            }
            
           else  if ($Stepaway2 == $min){
                $currentState = $mystate;
            $currentState[4] = $mystate[3]; 
            $currentState[3] = $mystate[4];
                $mystate = $currentState ;
                $openNode[] = $currentState;

            }
            
            else if ($Stepaway3 == $min){
            $currentState = $mystate;
            $currentState[4] = $mystate[5]; 
            $currentState[5] = $mystate[4];
                $mystate = $currentState ;
                $openNode[] = $currentState;

            }
            else if ($Stepaway4 == $min){
                $currentState = $mystate;
                $currentState[4] = $mystate[7]; 
                $currentState[7] = $mystate[4];
                    $mystate = $currentState ;
                    $openNode[] = $currentState;
                }
            
            $depth++;


            }
            else if($key == 3){// 0 in potions 3 (0,4,6)
                $fringe[]=0;
                $fringe[]=4;
                $fringe[]=6;

                $currentState = $mystate;
                $currentState[3] = $mystate[0]; 
                $currentState[0] = $mystate[3];
                for($zero = 0 ; $zero <= 8 ;$zero++){
                    if($currentState[$zero] != $goal[$zero]){
                        $Stepaway1++ ; 
                    }
                }

                $currentState = $mystate;
                $currentState[3] = $mystate[4]; 
                $currentState[4] = $mystate[3];
                for($fore = 0 ; $fore <= 8 ;$fore++){
                    if($currentState[$fore] != $goal[$fore]){
                        $Stepaway2++  ; // f(n) = 1 + 3  -> 
                    }
                }
                
                $currentState = $mystate;
                $currentState[3] = $mystate[6]; 
                $currentState[6] = $mystate[3];
                for($six = 0 ; $six <= 8 ;$six++){
                    if($currentState[$six] != $goal[$six]){
                        $Stepaway3 ++  ; // f(n)= 1 + 0 goal 
                    }
                }

               $min =  min($Stepaway1,$Stepaway2,$Stepaway3);

                
                

               if($Stepaway1 == $min){
                $currentState = $mystate;
            $currentState[3] = $mystate[0]; 
            $currentState[0] = $mystate[3];
                $mystate = $currentState ;
                $openNode[] = $currentState;

            }
            
           else  if ($Stepaway2 == $min){
                $currentState = $mystate;
            $currentState[3] = $mystate[4]; 
            $currentState[4] = $mystate[3];
                $mystate = $currentState ;
                $openNode[] = $currentState;
            

            }
            
            else if ($Stepaway3 == $min){
            $currentState = $mystate;
            $currentState[3] = $mystate[6]; 
            $currentState[6] = $mystate[3];
                $mystate = $currentState ;
                $openNode[] = $currentState;
            }

            
            $depth++;


            }


            else if($key == 2){// 0 in potions 2 (1,5)
                $fringe[]=1;
                $fringe[]=5;
                
                $currentState = $mystate;
                $currentState[2] = $mystate[1]; 
                $currentState[1] = $mystate[2];
                for($one = 0 ; $one <= 8 ;$one++){
                    if($currentState[$one] != $goal[$one]){
                        $Stepaway1++ ; 
                    }
                }

                $currentState = $mystate;
                $currentState[2] = $mystate[5]; 
                $currentState[5] = $mystate[2];
                for($five = 0 ; $five <= 8 ;$five++){
                    if($currentState[$five] != $goal[$five]){
                        $Stepaway2++  ; // f(n) = 1 + 3  -> 
                    }
                }
                
              

               $min =  min($Stepaway1,$Stepaway2);

                
                

               if($Stepaway1 == $min){
                $currentState = $mystate;
            $currentState[2] = $mystate[1]; 
            $currentState[1] = $mystate[2];
                $mystate = $currentState ;
                $openNode[] = $currentState;
            }
            
           else  if ($Stepaway2 == $min){
                $currentState = $mystate;
            $currentState[2] = $mystate[5]; 
            $currentState[5] = $mystate[2];
                $mystate = $currentState ;
                $openNode[] = $currentState;

            }
            $depth++;

        }

        
        else if($key == 0){// 0 in potions 0 (1,3)
            $fringe[]=1;
            $fringe[]=3;
            
            $currentState = $mystate;
            $currentState[0] = $mystate[1]; 
            $currentState[1] = $mystate[0];
            for($one = 0 ; $one <= 8 ;$one++){
                if($currentState[$one] != $goal[$one]){
                    $Stepaway1++ ; 
                }
            }

            $currentState = $mystate;
            $currentState[0] = $mystate[3]; 
            $currentState[3] = $mystate[0];
            for($three = 0 ; $three <= 8 ;$three++){
                if($currentState[$three] != $goal[$three]){
                    $Stepaway2++  ; // f(n) = 1 + 3  -> 
                }
            }
            
          

           $min =  min($Stepaway1,$Stepaway2);

            
            

           if($Stepaway1 == $min){
            $currentState = $mystate;
        $currentState[0] = $mystate[1]; 
        $currentState[1] = $mystate[0];
            $mystate = $currentState ;
            $openNode[] = $currentState;

        }
        
       else  if ($Stepaway2 == $min){
            $currentState = $mystate;
        $currentState[0] = $mystate[3]; 
        $currentState[3] = $mystate[0];
            $mystate = $currentState ;
            $openNode[] = $currentState;

        }
        

       
        $depth++;

    }
    else if($key == 6){// 0 in potions 6 (3,7)
        $fringe[]=3;
        $fringe[]=7;
        
        $currentState = $mystate;
        $currentState[6] = $mystate[3]; 
        $currentState[3] = $mystate[6];
        for($three = 0 ; $three <= 8 ;$three++){
            if($currentState[$three] != $goal[$three]){
                $Stepaway1++ ; 
            }
        }

        $currentState = $mystate;
        $currentState[6] = $mystate[7]; 
        $currentState[7] = $mystate[6];
        for($seven = 0 ; $seven <= 8 ;$seven++){
            if($currentState[$seven] != $goal[$seven]){
                $Stepaway2++  ; // f(n) = 1 + 3  -> 
            }
        }
        
      

       $min =  min($Stepaway1,$Stepaway2);

        
        

       if($Stepaway1 == $min){
        $currentState = $mystate;
    $currentState[6] = $mystate[3]; 
    $currentState[3] = $mystate[6];
        $mystate = $currentState ;
        $openNode[] = $currentState;

    }
    
   else  if ($Stepaway2 == $min){
        $currentState = $mystate;
    $currentState[6] = $mystate[7]; 
    $currentState[7] = $mystate[6];
        $mystate = $currentState ;
        $openNode[] = $currentState;
    

    }
    

   
    $depth++;

}
else if($key == 8){// 0 in potions 8 (5,7)
    $fringe[]=5;
    $fringe[]=7;
    
    $currentState = $mystate;
    $currentState[8] = $mystate[5]; 
    $currentState[5] = $mystate[8];
    for($five = 0 ; $five <= 8 ;$five++){
        if($currentState[$five] != $goal[$five]){
            $Stepaway1++ ; 
        }
    }

    $currentState = $mystate;
    $currentState[8] = $mystate[7]; 
    $currentState[7] = $mystate[8];
    for($seven = 0 ; $seven <= 8 ;$seven++){
        if($currentState[$seven] != $goal[$seven]){
            $Stepaway2++  ; // f(n) = 1 + 3  -> 
        }
    }
    
  

   $min =  min($Stepaway1,$Stepaway2);

    
    

   if($Stepaway1 == $min){
    $currentState = $mystate;
$currentState[8] = $mystate[5]; 
$currentState[5] = $mystate[8];
    $mystate = $currentState ;
    $openNode[] = $currentState;

}

else  if ($Stepaway2 == $min){
    $currentState = $mystate;
$currentState[8] = $mystate[7]; 
$currentState[7] = $mystate[8];
    $mystate = $currentState ;
    $openNode[] = $currentState;



}



$depth++;

}

    else if($key == 1){// 0 in potions 1 (0,2,4)
        $fringe[]=0;
        $fringe[]=2;
        $fringe[]=4;

        $currentState = $mystate;
        $currentState[1] = $mystate[0]; 
        $currentState[0] = $mystate[1];
        for($zero = 0 ; $zero <= 8 ;$zero++){
            if($currentState[$zero] != $goal[$zero]){
                $Stepaway1++ ; 
            }
        }

        $currentState = $mystate;
        $currentState[1] = $mystate[2]; 
        $currentState[2] = $mystate[1];
        for($two = 0 ; $two <= 8 ;$two++){
            if($currentState[$two] != $goal[$two]){
                $Stepaway2++  ; // f(n) = 1 + 3  -> 
            }
        }
        
        $currentState = $mystate;
        $currentState[1] = $mystate[4]; 
        $currentState[4] = $mystate[1];
        for($four = 0 ; $four <= 8 ;$four++){
            if($currentState[$four] != $goal[$four]){
                $Stepaway3 ++  ; // f(n)= 1 + 0 goal 
            }
        }

       $min =  min($Stepaway1,$Stepaway2,$Stepaway3);

        
        

       if($Stepaway1 == $min){
        $currentState = $mystate;
    $currentState[1] = $mystate[0]; 
    $currentState[0] = $mystate[1];
        $mystate = $currentState ;
        $openNode[] = $currentState;

    }
    
   else  if ($Stepaway2 == $min){
        $currentState = $mystate;
    $currentState[1] = $mystate[2]; 
    $currentState[2] = $mystate[1];
        $mystate = $currentState ;
        $openNode[] = $currentState;

    

    }
    
    else if ($Stepaway3 == $min){
    $currentState = $mystate;
    $currentState[1] = $mystate[4]; 
    $currentState[4] = $mystate[1];
        $mystate = $currentState ;
        $openNode[] = $currentState;

    }



    
    $depth++;

    }
    else if($key == 7){// 0 in potions 1 (4,6,8)
        $fringe[]=4;
        $fringe[]=6;
        $fringe[]=8;

        $currentState = $mystate;
        $currentState[7] = $mystate[4]; 
        $currentState[4] = $mystate[7];
        for($fore = 0 ; $fore <= 8 ;$fore++){
            if($currentState[$fore] != $goal[$fore]){
                $Stepaway1++ ; 
            }
        }

        $currentState = $mystate;
        $currentState[7] = $mystate[6]; 
        $currentState[6] = $mystate[7];
        for($six = 0 ; $six <= 8 ;$six++){
            if($currentState[$six] != $goal[$six]){
                $Stepaway2++  ; // f(n) = 1 + 3  -> 
            }
        }
        
        $currentState = $mystate;
        $currentState[7] = $mystate[8]; 
        $currentState[8] = $mystate[7];
        for($eight = 0 ; $eight <= 8 ;$eight++){
            if($currentState[$eight] != $goal[$eight]){
                $Stepaway3 ++  ; // f(n)= 1 + 0 goal 
            }
        }

       $min =  min($Stepaway1,$Stepaway2,$Stepaway3);

        
        

       if($Stepaway1 == $min){
        $currentState = $mystate;
    $currentState[7] = $mystate[4]; 
    $currentState[4] = $mystate[7];
        $mystate = $currentState ;
        $openNode[] = $currentState;

    }
    
   else  if ($Stepaway2 == $min){
        $currentState = $mystate;
    $currentState[7] = $mystate[6]; 
    $currentState[6] = $mystate[7];
        $mystate = $currentState ;
        $openNode[] = $currentState;


    }
    
    else if ($Stepaway3 == $min){
    $currentState = $mystate;
    $currentState[7] = $mystate[8]; 
    $currentState[8] = $mystate[7];
        $mystate = $currentState ;
        $openNode[] = $currentState;

    }



    
    $depth++;

    }


 
    if($mystate == $goal){
        $f = "found Goal";
    break;

        }else{
            $f = "Goal not found !";
        }
        

           
            




        }
        

        $arr = Array('Stepaway1'=>$Stepaway1 , 'Stepaway2'=>$Stepaway2  , 'Stepaway3'=>$Stepaway3 , 'min'=>$min, "f"=>$f ,
         "mystate"=>$mystate , "currentState"=>$currentState, 'depth'=>$depth,'open'=>$openNode);


        return view('Astar' , $arr);
        



    }



}
