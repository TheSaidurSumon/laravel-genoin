<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //


function uploadFile(Request $request):array{

  $img = $request->file('photo');
  $fileSize = filesize ($img);
  $fileType =filetype ($img);
  $originalName = $img->getClientOriginalName();
  $tempFileName = $img->getFilename();
  $extension = $img->extension();

return array (

'filename' => $fileSize,
'filetype' => $fileType,
'extension' => $extension,

);


}


}
