<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/',function(){
//     return view('posts.index');
// })->name('home');
Route::view('/','posts.index')->name('home');

Route::get('/lay',function(){
    return view('layout');
});

Route::get('/register',function(){
    return view('auth.register');
})->name('register');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');

