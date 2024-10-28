<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    dd('contato');
});

Route::post('/create/user',function(){
    dd('create');
});

Route::group(function(){
    
})