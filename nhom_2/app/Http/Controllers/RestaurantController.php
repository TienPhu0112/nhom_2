<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;


class RestaurantController extends Controller
{
    public function welcome(Request $request)
    {
        $lsFood = Food::orderBy('created_at', 'desc')->take(9)->get();
        return view("welcome")->with(['lsFood'=>$lsFood, 'title'=>'Home']);
    }
}
