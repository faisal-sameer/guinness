<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StuBarcode;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use GrahamCampbell\Binput\Facades\Binput;




class Barcode extends Controller
{

    
protected function barcode (){

    $barcode = StuBarcode::where('id',1)->first();

      $stu =  $barcode->stu_id . $barcode->id;

    return view('barcodes')->with('stu',$stu);    
}

protected function show(){

  $user = User::all();

  return 

  response()->view('home')
 ->header("Refresh", "5;url=/login");

}

protected function show01(){
  return view('test');
}

protected function inputFialed(Request $request){

  $data2 = $request->input('2');

  return $data2 ; 
}

}
