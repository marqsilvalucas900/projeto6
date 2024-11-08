<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=> 'blog'],function(){
    Route::get('/', function(){
        dd('blog');
    });
});



Route::group(['prefix'=> 'admin'],function(){
    Route::get('/', function(){
        dd('admin');
    });
});



Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    dd('contato');
});

Route::post('/create/user',function(){
    dd('create');
});

// Route::get('/user/{name}/age/{age}',function($name, $age){
//     dd("Name {$name} Age {$age}");
// })->where(['name' =>'[a-z]+', 'age'=>'[0-9]+']);

Route::get('/user/{name}/age/{age}',function($name, $age){
    dd("Name {$name} Age {$age}");
})->whereAlpha('name')->whereNumber('age');


//asdasd