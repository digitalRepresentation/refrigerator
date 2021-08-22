<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
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

//ログイン画面
Route::get('/login', [LoginController::class, 'index']);

//SignUp画面
Route::get('/signup', [SignUpController::class, 'index']);

//SignUp後の処理
Route::post('/', [SignUpController::class, 'signupCreate'])->name('signup');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//loginする時の処理
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');