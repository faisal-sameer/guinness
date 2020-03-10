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
                    
         $mystate = [1,2,3
                    ,4,5,0
                    ,7,8,6];
        $currentState = [];// h(n)
        $depth = 0 ; //g(n)
        $maxDepth = 10 ; 
        $path = 0 ; // f(n)
        $fringe =[];
        $Stepaway1 = 0 ;
        $Stepaway2 = 0 ;
        $Stepaway3 = 0 ;

        for($depth;$depth<=$maxDepth;$depth++){
            
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
                        $Stepaway1++  ; 
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




            }
            




        }
        

        $arr = Array('Stepaway1'=>$Stepaway1 , 'Stepaway2'=>$Stepaway2  , 'Stepaway3'=>$Stepaway3 );


        return view('Astar' , $arr);
        



    }



}
