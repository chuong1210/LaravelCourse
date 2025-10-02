<?php

use App\Http\Controllers\FoodsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;

use Illuminate\Support\Facades\Route;

Route::get("", [PagesController::class,"index"])->name("");
Route::get("about", [PagesController::class,"about"])->name("");
Route::get("/posts", [PostsController::class,"about"])->name("");
Route::resource('/foods', FoodsController::class);

Route::get('/products', [ProductsController::class, 'index'])->name('products');
// Route::get('/products/{phoneName}', [ProductsController::class, 'detail'])
//     // ->where('id', '[0-9]+')
//         ->where(['phoneName'=> '[a-zA-Z0-2]+','id'=> '[0-9]+'?'':''])

//     ->name('products.detail');

// route::get('products',[
//     'uses' => 'App\Http\Controllers\ProductController@index',
//     'as' => 'products.index'
// ]);
Route::get('/', function () {
    return view('home');
});

Route::get('user', function () {return 'User Page';});


Route::get('food', function () {return ["sushi","dog"];});

Route::get('sth', function () {return redirect("/");});

Route::get('me', function () {return response()->json(['name'=>'chuong','age'=>20]);});
