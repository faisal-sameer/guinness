<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Puzzle extends Controller
{
  

    public function puzzle8(){

		$gole =    [1,2,3
					,4,5,6,
					7,8,0];
		$mystate = [1,7,2
					,4,3,5
					,6,0,8];
		$moves = 0 ;
		$bad = 0 ;
		$step = " ";
		$normal = [1,2,3,4,5,6,7,8,0];
		$new = [];

		for ($i=0; $i <=8 ; $i++) {
			if($mystate[$i] == $gole[$i]){
				$moves++;

			}else{
				$bad ++ ;
			}
			
			if($mystate[$i]==0){
				$key = array_search(0,$mystate);
				if($key == 0 || $key == 2 || $key == 6 || $key == 8){
					$step = $step . "Tow Steps " . $key  ;

				}else if ($key == 1 || $key == 3 || $key == 5 || $key == 7){
					$step = $step . "Three Steps " . $key ;
					if($key == 7 ){
						$new = $mystate;
						$new [7] = $mystate[8];
						$new [8] = $mystate [7];
					}
					
				}
			}

		}

		
		
		
		
		$arr = Array('moves'=>$moves , 'bad'=>$bad , 'step'=>$step , 'key'=>$key ,  'new'=>$new);

        return view('puzzle' , $arr);



    }
}
