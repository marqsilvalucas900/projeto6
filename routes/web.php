<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
})->name('home');

Route::post('/login',function(){
    // return redirect('/')->withInput()->with('message','Error ao fazer o login');
    return back()->withInput();
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


Route::get("/contact2", function(){
    //return redirect()->route('home');
    // return redirect('/teste');
    // dd(route('contact'));
    dd(url('teste'));
    // dd("contact");
})->name('contact');

Route::get('/teste', function(){
    dd("teste");
})->name('teste2');

Route::get('/teste4',[HomeController::class,'index'])->name('home');
Route::get('/teste4/{id}',[ProductController::class,'edit'])->name('product.edit');


Route::get('/product/{id}',function ($id){
    dd($id);
})->name('product');

Route::get('/teste3', function(){
    // return redirect()->route('product',['id' =>45]);
    // return redirect()->action([HomeController::class,'index']);
    // return redirect()->action([ProductController::class,'edit'],['id'=>45]);
    return redirect()->away('https://www.google.com');
});

