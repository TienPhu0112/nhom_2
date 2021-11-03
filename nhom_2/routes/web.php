<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\OrderController;
use \App\Http\Controllers\CustomerController;
use \App\Http\Controllers\TableController;
use \App\Http\Controllers\TypeController;
use \App\Http\Controllers\FoodController;
use \App\Http\Controllers\Admin\NewsController;

Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);

//Home
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Blog
Route::get('/blog',[\App\Http\Controllers\BlogController::class,'welcome']);
Route::get('/blog/{topic}',[\App\Http\Controllers\BlogController::class,'welcome'])->name('cate');
Route::get('/blog',[\App\Http\Controllers\BlogController::class,'welcome'])->name('search');
Route::get('/blog-detail/{id}',[\App\Http\Controllers\BlogController::class,'detail'])->name('detail');

//Menu
Route::get('/menu', [App\Http\Controllers\ToGoOrderController::class, 'menu']);

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

        #News
        Route::resource("news",NewsController::class);

    });

});


Route::get("/",[App\Http\Controllers\RestaurantController::class,'welcome']);

Route::get("/reservation",[App\Http\Controllers\RestaurantController::class,'reservation']);












