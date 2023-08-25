<?php

use App\Http\Controllers\EmailController;
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
    return view('index');
});


Route::controller(EmailController::class)->group(function(){

    Route::post('/send-email','sendEmail')->name('send-email');
});



// Route::get('login',function (){
//     return view('login');
// });


