<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stu_tables;


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
        
    }

}
