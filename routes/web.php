<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index']);
Route::get('/user',[UserController::class,'index']);
Route::get('/user/crate',[UserController::class,'create']);//deve ser colocado antes do user/{id} pois evida qe o create seja passado com argumento para o id
Route::get('/user/{id}',[UserController::class,'show']);
Route::get('/user/{id}/edit',[UserController::class,'edit']);
Route::put('/user/{id}',[UserController::class,'update']);
Route::post('/user',[UserController::class,'store']);
Route::post('/user',[UserController::class,'destroy']);

