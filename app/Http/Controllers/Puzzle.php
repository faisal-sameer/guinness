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
		 $key = 0;
		 $string = " ";
		 $openNode = [];
		 $oldstate = [];
		 $view = [];
		for($i = 0 ; $i<=8 ; $i ++){
			if($mystate[$i] == $goal[$i]){
				$steps ++ ;
			}else{
				$bad++ ;
				$key = array_search(0,$mystate);// zero postion 

				for($j = 0 ; $j <= 10 ; $j++){
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


			}

			
		}
			if($steps == 8 ){
				$string = "found Goal ";
			}

		}
		$arr = Array('steps'=>$steps , 'bad'=>$bad  , 'key'=>$key , 'mystate'=>$mystate,
		 'fringe'=>$fringe , 'string'=>$string , 'depth'=>$depth , 'openNode'=>$openNode , 'view'=>$view);


        return view('puzzle' , $arr);

	}





	public function DFS( ){
		$goal =    [1,2,3
	   ,4,5,6,
	   7,8,0];
		$mystate = [7,2,3
		,4,0,6,
		1,5,8];
		$steps = 0 ;
		$bad = 0 ;
		$step = " ";
		$normal = [1,2,3,4,5,6,7,8,9];
		$fringe = [];
		$depth = 0 ;
		$new = [] ;
		$key = 0;
		$string = " ";
		$openNode = [];
		$oldstate = [];
		$view = [];
	  
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
			$arr = Array('steps'=>$steps , 'bad'=>$bad  , 'key'=>$key , 'mystate'=>$mystate,
			'fringe'=>$fringe , 'string'=>$string , 'depth'=>$depth , 'openNode'=>$openNode , 'view'=>$view);
   
	
			return view('puzzle' , $arr);
	
		}
	}
   
}
}





