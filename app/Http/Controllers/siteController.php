<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    //
    function home(Request $request){
        return view('maillard.index');

    }

    function menu(Request $request){
        return view('maillard.menu');

    }

    function about(Request $request){
        return view('maillard.about');

    }

    function reservation(Request $request){
        return view('maillard.reservation');

    }
}
