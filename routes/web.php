<?php

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

Route::get('/send-mail', function () {

    $details=[

     'title'=>"Mail From BayBD",
     'body'=>"This for testing smtp"


    ];

    \Mail::to('esraq26552@gmail.com')->send(new \App\Mail\TestMail($details));
     echo "mail has been sent";



});

Route::get('/approve','App\Http\Controllers\ApproveController@index');
