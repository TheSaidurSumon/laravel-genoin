<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routeController extends Controller
{
    //
    function Routes()
    {

        return response(" Hello This is route Controller ");
    }

//     function downloadId($downloadId, $fileTypeId = "PDF")
//     {
//         return response("download {$fileTypeId} with this ID: {$downloadId} ");
//     }

//     function error()
//     {
//         return response("No  data found");
//     }
// }

// function Action (Request $request  ){

//   $name =  $request->name;
//   $age =  $request->age;


//   return "my name is {$name} and my age is {$age}";


// // }
// function Action2 (Request $request  ){

//     $name =  $request->input ('name');
//     $age =  $request->input('age');
  
  
//     return "my name is {$name} and my age is {$age}";
  
  
//   }

  
function Action2 (Request $request  ){

    // $name =  $request->input ('name');
    // $age =  $request->input('age');
  
  
    return $request->input();
  
  
  }

}