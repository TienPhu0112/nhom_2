<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Table;


class RestaurantController extends Controller
{
    public function welcome(Request $request)
    {
        $lsImg = Gallery::all();
        $lsFood = Food::orderBy('created_at', 'desc')->take(9)->get();
        return view("welcome")->with(['lsFood'=>$lsFood, 'lsImg' => $lsImg, 'title'=>'PATO PLACE']);
    }

    public  function  reservation(Request  $request){
        $lsImg = Gallery::all();
        $lsTable= Table::all();
        $cus =new Customer();
        $cus->name=$request->name;
        $cus->phone=$request->phone;
        $cus->email=$request->email;
        $lsFood = Food::orderBy('created_at', 'desc')->take(9)->get();
        return view("reservation")->with(['title'=>'Reservation','lsFood'=>$lsFood,'lsImg' => $lsImg,'lsTable'=>$lsTable]);
    }

}
