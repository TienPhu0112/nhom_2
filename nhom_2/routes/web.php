<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\OrderController;
use \App\Http\Controllers\CustomerController;
use \App\Http\Controllers\TableController;
use \App\Http\Controllers\TypeController;
use \App\Http\Controllers\FoodController;

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('main',[MainController::class,'index']);

        #Order
        Route::resource("order",OrderController::class);

        #Dish type
        Route::resource('type', TypeController::class );
        Route::resource('type/add', TypeController::class );
        Route::resource('type/edit', TypeController::class );

        #Food
        Route::resource('food', FoodController::class );
        Route::resource('food/add', FoodController::class );

        #Customer
        Route::resource("customer",CustomerController::class);

        #Table
        Route::resource("table",TableController::class);
    });

});


Route::get("/",[App\Http\Controllers\RestaurantController::class,'welcome']);











