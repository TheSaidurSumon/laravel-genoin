<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{

    private $task = [
        [
            "id"=> 1,
            "name"=>"task 1",
            "description"=> "This is description 1"
        ],
        [
            "id"=> 2,
            "name"=>"task 2",
            "description"=> "This is description 2"
        ],
        [
            "id"=> 3,
            "name"=>"task 3",
            "description"=> "This is description 3"
        ]
        
        ];

        function task(){

            $totalTask = count ($this->task);
            $name = 'john doe';



           // return response()->json($this->task);
            //return view('hello', ['total'=> $totalTask]);
         //   return view('hello', compact('name', 'totalTask'));
            return view('hello', ['tasks'=>$this->task]);
        }

}
