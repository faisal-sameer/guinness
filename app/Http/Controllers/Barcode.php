<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StuBarcode;


class Barcode extends Controller
{

    
protected function barcode (){

    $barcode = StuBarcode::where('id',1)->first();

      $stu =  $barcode->stu_id . $barcode->id;

    return view('barcodes')->with('stu',$stu);    
}



}
