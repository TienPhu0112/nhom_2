<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Table;


class RestaurantController extends Controller
{
    public function welcome(Request $request)
    {
        $lsFood = Food::orderBy('created_at', 'desc')->take(9)->get();
        return view("welcome")->with(['lsFood'=>$lsFood, 'title'=>'PATO PLACE']);
    }

    public  function  reservation(Request  $request){
        $lsTable= Table::all();
        $cus =new Customer();
        $cus->name=$request->name;
        $cus->phone=$request->phone;
        $cus->email=$request->email;
        $lsFood = Food::orderBy('created_at', 'desc')->take(9)->get();
        return view("reservation")->with(['title'=>'Reservation','lsFood'=>$lsFood,'lsTable'=>$lsTable]);
    }

}
