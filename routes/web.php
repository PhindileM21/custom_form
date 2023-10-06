<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[CustomAuth::class,'LOGIN'])->middleware('alreadyLoggedIn');
Route::get('/registration',[CustomAuth::class,'registration']);
Route::post('/register-user',[CustomAuth::class,'registerUser'])-> name('register-user');
Route::post('login-user',[CustomAuth::class,'loginUser'])-> name('login-user');
Route::get('/dashboard',[CustomAuth::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuth::class,'logout']);
