<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileController extends Controller
{
    //

function fileDownload($invoiceId, $fileType="PDF"){

    return response ("downloading ($fileType) a file with id: ($invoiceId)");

}    
function error(){

    abort (404);
}
}
