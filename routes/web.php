<?php

use App\Mail\studentNotifyMail;
use App\Models\School;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('send-mail/{school}', function () {
   
    Mail::to('mbadawy1994@gmail.com')->send(new studentNotifyMail($school));
   
    dd("Email is Sent.");
});

// Route::get('products/{id}',function{});
