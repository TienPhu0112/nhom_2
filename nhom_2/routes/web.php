<?php

use Illuminate\Support\Facades\Route;


Route::get('admin',[\App\Http\Controllers\Admin\MainController::class,'index'])->name('admin');
Route::get('admin/main',[\App\Http\Controllers\Admin\MainController::class,'index']);

Route::resource("customer",\App\Http\Controllers\CustomerController::class);

Route::resource("table",App\Http\Controllers\TableController::class);

Route::resource("admin/order",\App\Http\Controllers\Admin\OrderController::class);

// Dish type
Route::resource('admin/type', App\Http\Controllers\TypeController::class );
Route::resource('admin/type/add', App\Http\Controllers\TypeController::class );
Route::resource('admin/type/edit', App\Http\Controllers\TypeController::class );


// Food
Route::resource('admin/food', App\Http\Controllers\FoodController::class );
Route::resource('admin/food/add', App\Http\Controllers\FoodController::class );
Route::resource('admin/food/add', App\Http\Controllers\FoodController::class);


