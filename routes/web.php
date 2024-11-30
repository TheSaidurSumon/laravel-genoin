
<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\routeController;
use App\Http\Controllers\demoController;
use App\Http\Controllers\imageController;
use App\Http\Controllers\uploadController;
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
Route::post('/upload', [uploadController::class, 'uploadFile']);
Route::get('/image', [imageController::class, 'imageUpload'])->name('image.upload');
Route::post('/imagePost', [imageController::class, 'imageUploadPost'])->name('image.upload.post');
Route::get('/image/hello', [imageController::class, 'hello1']);



