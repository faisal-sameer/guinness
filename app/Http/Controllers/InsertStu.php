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
}
