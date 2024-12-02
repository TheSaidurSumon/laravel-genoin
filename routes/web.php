
<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\routeController;
use App\Http\Controllers\demoController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\uploadController;
use App\Http\Controllers\siteController;
use App\Http\Controllers\logController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\midController;
use App\Http\Middleware\DemoMiddleware;
use Illuminate\Support\Facades\Route;


// Route for Register Page
Route::get('/register', function () {
    return view('auth.register');
});

// Route for Login Page
Route::get('/login', function () {
    return view('auth.login');
});

// Route for Dashboard
Route::get('/', function () {
    return view('dashboard');
});

// Route::get('/aboutMe', [aboutController::class, 'aboutMe']);
// Route::get('/download/invoice/{invoiceId}', [fileController::class, 'fileDownload']);
// Route::get('/download/invoice/{invoiceId}', [fileController::class, 'error']);
// Route::get('/invoice', [invoiceController::class, 'invoice']);

//Route::get('/route', [routeController::class, 'Routes']);
Route::get('/route/download/{downloadId}', [routeController::class, 'downloadId']);
Route::get('/route/download', [routeController::class, 'error']);

// Route::get('/route/download/{downloadId}/type/{fileType?}', [routeController::class, 'downloadId']);
// Route::get('/route/download/{downloadId}/type/{fileType?}', [routeController::class, 'downloadId']);
//Route::get('/route/{name}/{age}', [routeController::class, 'Action']);
//Route::get('/route', [routeController::class, 'Action2']);
Route::get('/route', [routeController::class, 'Action2']);


Route::get('/demo1', [demoController::class, 'demo1']);
Route::get('/task', [demoController::class, 'task']);




Route::post('/upload', [uploadController::class, 'uploadFile']);
Route::get('/image', [imageController::class, 'imageUpload'])->name('image.upload');
Route::post('/imagePost', [imageController::class, 'imageUploadPost'])->name('image.upload.post');
Route::get('/image/hello', [imageController::class, 'hello1']);


//site view

Route::get('/home', [siteController::class, 'home'])->name('home');
Route::get('/menu', [siteController::class, 'menu'])->name('menu');
Route::get('/about', [siteController::class, 'about'])->name('about');
Route::get('/reservation', [siteController::class, 'reservation'])->name('reservation');


//laravel log history 
Route::get('/log', [logController::class, 'summation']);

//session
Route::get('/sessionput', [sessionController::class, 'sessionPut']);
Route::get('/sessionpull', [sessionController::class, 'sessionPull']);
Route::get('/sessionget', [sessionController::class, 'sessionGet']);
Route::get('/sessionforget', [sessionController::class, 'sessionForget']);
Route::get('/sessionflush', [sessionController::class, 'sessionFlush']);

//middleware 

Route::get('/midware', [midController::class, 'DemoAction'])->middleware([DemoMiddleware::class]);
Route::get('/midware2', [midController::class, 'DemoAction2']);
Route::get('/midware3', [midController::class, 'DemoAction3']);
Route::get('/midware4', [midController::class, 'DemoAction4']);
Route::get('/midware5', [midController::class, 'DemoAction5']);



