<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DishType;
use App\Models\Food;

class RestaurantController extends Controller
{
    public function welcome()
    {
        $lsType = DishType::all();
        $lsFood = Food::orderBy('created_at', 'desc')->take(6)->get();
        return view("home")->with(['lsType'=>$lsType, 'lsFood'=>$lsFood]);
    }
}
