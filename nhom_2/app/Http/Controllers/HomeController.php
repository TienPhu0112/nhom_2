<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DishType;
use App\Models\Food;
use App\Models\Order;
use App\Models\Table;
use App\Models\TogoOrder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Total
        $total_Table = Table::all()->count();
        $total_Type = DishType::all()->count();
        $total_Food = Food::all()->count();
        $total_Customer = Customer::all()->count();
        $total_TogoOrder = TogoOrder::all()->count();
        $total_Booking = Order::all()->count();

        // List
        $lsTable = Table::all();
        $lsType = DishType::all();
        $lsFood = Food::all();
        $lsCustomer = Customer::all();
        $lsTogoOrder = TogoOrder::orderBy('created_at', 'desc')->get();
        $lsBooking = Order::orderBy('created_at', 'desc')->get();

        return view('home')->with([

            // Total
            'total_Table' => $total_Table,
            'total_Type' => $total_Type,
            'total_Food' => $total_Food,
            'total_Customer' => $total_Customer,
            'total_TogoOrder' => $total_TogoOrder,
            'total_Booking' => $total_Booking,

            // List
            'lsTable' => $lsTable,
            'lsType' => $lsType,
            'lsFood' => $lsFood,
            'lsCustomer' => $lsCustomer,
            'lsTogoOrder' => $lsTogoOrder,
            'lsBooking' => $lsBooking,

            // title
            'title' => 'Home',
        ]);
    }
}
