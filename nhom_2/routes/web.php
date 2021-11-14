<?php

use App\Models\DishType;
use App\Models\Food;
use App\Models\Gallery;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\Users\LogoutController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\OrderController;
use \App\Http\Controllers\CustomerController;
use \App\Http\Controllers\TableController;
use \App\Http\Controllers\TypeController;
use \App\Http\Controllers\FoodController;
use \App\Http\Controllers\Admin\NewsController;
use \App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController2;
use \App\Http\Controllers\EventController;
use App\Http\Controllers\RestaurantController;
use \App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\UserController;

//Login
Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);

//Logout
Route::post('logout',[LogoutController::class,'logout'])->name('logout');

//Blog
Route::get('/blog',[BlogController::class,'welcome']);
Route::get('/blog/{topic}',[BlogController::class,'welcome'])->name('cate');
Route::get('/blog',[BlogController::class,'welcome'])->name('search');
Route::get('/blog-detail/{id}',[BlogController::class,'detail'])->name('detail');

//Gallery
Route::get('/gallery',[GalleryController2::class,'welcome']);

//Menu
Route::get('/menu', [App\Http\Controllers\ToGoOrderController::class, 'menu']);
//Route::get('/foodorder_success', [App\Http\Controllers\ToGoOrderController::class, 'foodorder_success']); TEST form mail

// cart
Route::get('/cart', [App\Http\Controllers\ToGoOrderController::class, 'cart'])->name('cart');
Route::post('/add_food/{fid}', [App\Http\Controllers\ToGoOrderController::class, 'add_food'])->name('add_food');
Route::get('/remove_food/{rowId}', [App\Http\Controllers\ToGoOrderController::class, 'remove_food'])->name('remove_food');
Route::post('update_cart',[App\Http\Controllers\ToGoOrderController::class, 'update_cart'])->name('update_cart');
Route::get('/clear_cart', function (){
    \Cart::destroy();
    return redirect('/menu');
});
Route::post('update_cart',[App\Http\Controllers\ToGoOrderController::class, 'update_cart'])->name('update_cart');
Route::get('/checkoutcart', function () {
    $lsImg = Gallery::all();
    $lsType = DishType::all();
    $lsFood = Food::all();
    return view('checkoutcart')->with(['lsType' => $lsType, 'lsFood'=> $lsFood, 'title' => 'Checkout','lsImg' => $lsImg]);
})->name('checkoutcart');
Route::post('place_order',[App\Http\Controllers\ToGoOrderController::class, 'place_order'])->name('place_order');
// end cart

Route::middleware(['auth'])->group(function(){
    Route::prefix('admin')->group(function(){
        #Home
        Route::get('/', [MainController::class, 'index'])->name('admin');
        Route::get('main',[MainController::class,'index']);

        #User
        Route::resource("user",UserController::class);

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

        #Gallery
        Route::resource("gallery",GalleryController::class);


        #Event
        Route::resource("event",EventController::class);

        #Contact
        Route::resource("contact",ContactController::class);


        #FoodOrder
        Route::resource("food_order",\App\Http\Controllers\OrderFoodController::class);
        Route::get('changeOrderStatus/{status}/{order}',[App\Http\Controllers\OrderFoodController::class, 'changeOrderStatus']);

    });

});



Route::get("/",[RestaurantController::class,'welcome'])->name("welcome");
Route::post("/",[RestaurantController::class,'booking']);

Route::get("/reservation",[RestaurantController::class,'reservation'])->name('reservation');
Route::post("/reservation",[RestaurantController::class,'booking']);

#about
Route::get("/about",[RestaurantController::class,'about']);

#contact
Route::get("/contact",[RestaurantController::class,'contact']);

#Test giao diện đặt đồ thành công
//Route::get('/foodorder_success',[App\Http\Controllers\ToGoOrderController::class, 'foodorder_success'])->name('foodorder_success');











