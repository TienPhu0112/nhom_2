<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('admin/changeStatusJson',[App\Http\Controllers\TableController::class,'changeStatusJson']);

// Change status order
Route::get('admin/changeStatusOrderJson',[App\Http\Controllers\OrderFoodController::class, 'changeStatusOrderJson']);

// Change status ordercontroller
Route::get('admin/changeStatus',[\App\Http\Controllers\Admin\OrderController::class, 'changeStatus']);

