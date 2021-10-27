<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\OrderController;

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('main',[MainController::class,'index']);

        #Order
        Route::resource("order",OrderController::class);

    });

});



Route::resource("customer",\App\Http\Controllers\CustomerController::class);

Route::resource("table",\App\Http\Controllers\TableController::class);


// Dish type
Route::resource('admin/type', App\Http\Controllers\TypeController::class );
Route::resource('admin/type/add', App\Http\Controllers\TypeController::class );
Route::resource('admin/type/edit', App\Http\Controllers\TypeController::class );


// Food
Route::resource('admin/food', App\Http\Controllers\FoodController::class );
Route::resource('admin/food/add', App\Http\Controllers\FoodController::class );
Route::resource('admin/food/add', App\Http\Controllers\FoodController::class);


