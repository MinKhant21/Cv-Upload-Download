<?php

use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('upload');
});

Route::post('/upload/cv',[UploadController::class,'store']);

Route::get('/show',[UploadController::class,'show']);

Route::get('/download/{file}',[UploadController::class,'download']);

