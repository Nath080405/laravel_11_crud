<?php

use App\Http\Controllers\ProductController;
Route::get('/', function () {
 return view('welcome');
});
Route::resource('products', ProductController::class);
