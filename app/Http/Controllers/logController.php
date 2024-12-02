<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class logController extends Controller
{
    //
    function summation(Request $request){
        $num1 = 10;
        $num2 = 30;
        $sum = $num1 + $num2;
        Log::info($sum);
        Log::alert($sum);
        Log::emergency($sum);
        Log::critical($sum);
        Log::error($sum);
        Log::warning($sum);
        Log::notice($sum);
        Log::debug($sum);
        return $sum;
    }
}
