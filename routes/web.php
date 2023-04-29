<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/login', function(){
    return view("auth.login");
})->name('login');

Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::post('/register/process', function(){
    return "registered";
});

Route::post('login/authenticate', function(){
    return "login";
});