<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Puzzle extends Controller
{

	
//	var $key = array_search(0,$mystate);
    public function puzzle8( ){
		 $goal =    [1,2,3
		,4,5,6,
		7,8,0];
		 $mystate = [1,2,0
		,4,5,3
		,7,8,6];
		 $steps = 0 ;
		 $bad = 0 ;
		 $step = " ";
		 $normal = [1,2,3,4,5,6,7,8,9];
		 $fringe = [];
		 $depth = 0 ;
		 $new = [] ;
		 $allroot=[];
		 $key = 0;
		 $string = " ";
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
				
				
						$new[5] = $mystate[8];
						$new[8]= $mystate[5] ;
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
				
				else if ($key == 0 ){
					$fringe[]=1;
					$fringe[]=3;
	   
					$new =$mystate;
					 $new[0]=$mystate[3];
					 $new[3]=$mystate[0];
					 $mystate =$new ;
					 $depth ++ ;
	   
					   }
				 else if ($key == 7){
					$fringe[] = 4;
					$fringe[] = 6;
					$fringe[] = 8;
					$new = $mystate;
					$new[7] = $mystate[8];
					$new[8]= $mystate[7] ;
					$mystate = $new ;
					$depth ++ ;
				
				 }
				
				 else if ($key == 4){
					$fringe[] = 1;
					$fringe[] = 3;
					$fringe[] = 5;
					$fringe[] = 7;
					$new = $mystate;
					$new[4] = $mystate[7];
					$new[7]= $mystate[4] ;
					$mystate = $new ;
					$depth ++ ;
				
				 }
				
				else if ($key == 2){ // zero in postion 2 
					$fringe[] = 1;
					$fringe[] = 5;
					$new = $mystate;
					$new[2] = $mystate[5];
					$new[5]= $mystate[2] ;
					$mystate = $new ;
					$depth ++ ;
				}else if ($key == 1){ // zero in postion 1 
					$fringe[] = 0;
					$fringe[] = 2;
					$fringe[] = 4;
					$new = $mystate;
					$new[1] = $mystate[2];
					$new[2]= $mystate[1] ;
					$mystate = $new ;
					$depth ++ ;
				}

				

			}
		}
			if($steps == 8 ){
				$string = "found Goal ";
			}

		}
		$arr = Array('steps'=>$steps , 'bad'=>$bad  , 'key'=>$key , 'mystate'=>$mystate,
		 'fringe'=>$fringe , 'string'=>$string , 'depth'=>$depth);


        return view('puzzle' , $arr);

	}
	protected function POS ($goal , $mystate , $steps , $fringe , $depth){
		for($i = 0 ; $i<=8 ; $i ++){
			if($mystate[$i] == $goal[$i]){
				$steps ++ ;
			}else{
				$bad++ ;
			}
			if($steps == 8 ){
				$text = "found Goal ";
				
				
			}

}
return  $text;
}
}





