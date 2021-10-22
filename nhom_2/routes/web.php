<?php

use Illuminate\Support\Facades\Route;


Route::get('admin',[\App\Http\Controllers\Admin\MainController::class,'index'])->name('admin');
Route::get('admin/main',[\App\Http\Controllers\Admin\MainController::class,'index']);
<<<<<<< Updated upstream

Route::resource("customer",\App\Http\Controllers\CustomerController::class);
=======
Route::resource("table",App\Http\Controllers\TableController::class);

>>>>>>> Stashed changes
