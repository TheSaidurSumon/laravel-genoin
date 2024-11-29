
<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\fileController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\routeController;
use App\Http\Controllers\demoController;
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
Route::get('/dashboard', function () {
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



