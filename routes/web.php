<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;

Route::get('/', [
    PagesController::class,
    'index'
]);

Route::get('/about', [
    PagesController::class,
    'about'
]);

Route::get('/posts', [
    PostsController::class,
    'index'
]);

// Auth::routes();
Route::resource('foods', FoodsController::class);
// Route::get('/foods/create', [
//     FoodsController::class,
//     'create'
// ]);
// Route::post('/foods', [
//     FoodsController::class,
//     'index'
// ]);



// Route::get('/products', [
//     ProductsController::class,
//     'index' // index function of prodicts
// ])->name('products');

// how to validate "id only integer" ?
// regular expression
// Route::get('/products/{productName}/{id}', [
//     ProductsController::class,
//     'detail' // index function of prodicts
// ])->where([
//     'productName' => '[a-zA-Z0-9]+',
//     'id'=> '[0-9]+'
// ]);

// Route::get('/', function () {
//     return view('home');
//     // return env("MY_NAME");
// });

// Route::get('/users', function()
// {
//     return 'This is the users page';
// });

// // response an array
// Route::get('/foods', function(){
//     return ['sushi', 'sashimi', 'tofu'];
// });


// // response an object
// Route::get('/aboutMe', function(){
//     return response()->json([
//         'name' => "truong",
//         "email" => "2052gami"
//     ]);
// });

// // response another request = redirect
// Route::get('/something', function() {
//     return redirect('/foods');
// });