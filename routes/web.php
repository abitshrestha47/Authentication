<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticateController;

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
    return view('signup');
});

Route::post('/logger',[AuthenticateController::class,'logger'])->name('logger');

Route::get('/login',function(){
    return view('login');
});

Route::post('/Loggedin',[AuthenticateController::class,'loggedin'])->name('Loggedin');

Route::get('/dashboard',function(){
    return view('welcome');
});
