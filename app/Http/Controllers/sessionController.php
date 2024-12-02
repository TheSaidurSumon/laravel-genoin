<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //
function sessionPut (Request $request):bool{
    $email = 'Saidur@gmail.com';
        $request->session()->put('userEmail', $email);
      //  $request->session()->pull();
      //  $request->session()->forget();
       // $request->session()->flush();
    return true;
}
function sessionPull (Request $request):bool{
   return $request->session()->pull('userEmail', 'default');
}

function sessionGet (Request $request){
     $data = $request->session()->get('userEmail');
    return $data;
 }


function sessionForget (Request $request):bool{
  $request->session()->forget('userEmail');
    return true;
}
function sessionFlush (Request $request):bool{

    $request->session()->flush();

    return true;
}


}
