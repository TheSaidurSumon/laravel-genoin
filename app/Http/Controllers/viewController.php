<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    //
function sum(Request $request){

    $num1 = 10;
    $num2 = 20;
    $sum = $num1+$num2;

  

  return view ('view',['num1Key'=>$num1,'num2Key'=>$num2,'sumKey'=>$sum]);

}
   
}
