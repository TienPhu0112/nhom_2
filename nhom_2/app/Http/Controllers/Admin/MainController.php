<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DishType;
use App\Models\Food;
use App\Models\FoodOrder;
use App\Models\Order;
use App\Models\Table;
use App\Models\TogoOrder;
use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{
    public function index(Request $request)
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $day = date("d");
        $month = date("m");
        $year = date("Y");


        $sumTotal = TogoOrder::whereMonth('created_at',$month)->whereYear('created_at',$year)->whereIn('status',[0,1])->sum('total');

        $total_Table = Table::all()->count();
        $total_Type = DishType::all()->count();
        $total_Food = Food::all()->count();
        $total_Revenue = number_format($sumTotal);
        $total_TogoOrder = TogoOrder::whereMonth('created_at',$month)->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $total_Booking = Order::whereDay('created_at',$day)->whereMonth('created_at',$month)->whereYear('created_at',$year)->whereIn('status',[0,1])->count();

        //Chart Data
        $bookingJan = Order::whereMonth('created_at',"1")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingFeb = Order::whereMonth('created_at',"2")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingMar = Order::whereMonth('created_at',"3")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingApr = Order::whereMonth('created_at',"4")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingMay = Order::whereMonth('created_at',"5")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingJun = Order::whereMonth('created_at',"6")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingJul = Order::whereMonth('created_at',"7")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingAug = Order::whereMonth('created_at',"8")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingSep = Order::whereMonth('created_at',"9")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingOct = Order::whereMonth('created_at',"10")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingNov = Order::whereMonth('created_at',"11")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $bookingDec = Order::whereMonth('created_at',"12")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();

        $orderJan = TogoOrder::whereMonth('created_at',"1")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderFeb = TogoOrder::whereMonth('created_at',"2")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderMar = TogoOrder::whereMonth('created_at',"3")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderApr = TogoOrder::whereMonth('created_at',"4")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderMay = TogoOrder::whereMonth('created_at',"5")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderJun = TogoOrder::whereMonth('created_at',"6")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderJul = TogoOrder::whereMonth('created_at',"7")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderAug = TogoOrder::whereMonth('created_at',"8")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderSep = TogoOrder::whereMonth('created_at',"9")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderOct = TogoOrder::whereMonth('created_at',"10")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderNov = TogoOrder::whereMonth('created_at',"11")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();
        $orderDec = TogoOrder::whereMonth('created_at',"12")->whereYear('created_at',$year)->whereIn('status',[0,1])->count();

        // List
        $lsTable = Table::all();
        $lsType = DishType::all();
        $lsFood = Food::all();
        $lsCustomer = Customer::all();
        $lsTogoOrder = TogoOrder::whereMonth('created_at',$month)->whereYear('created_at',$year)->whereIn('status',[0,1])->get();
        $lsBooking = Order::whereMonth('created_at',$month)->whereYear('created_at',$year)->whereIn('status',[0,1])->get();

        $lsSuccess = DB::table('food_orders')->leftjoin('togo_orders', 'togo_orders.id', '=', 'food_orders.order_id')
                                                ->where('togo_orders.status',2)
                                                ->get();


        // Quantity & Revenue

        return view('admin.home')->with([

            // Total
            'total_Table' => $total_Table,
            'total_Type' => $total_Type,
            'total_Food' => $total_Food,
            'total_Revenue' => $total_Revenue,
            'total_TogoOrder' => $total_TogoOrder,
            'total_Booking' => $total_Booking,
            'lsSuccess' => $lsSuccess,

            //Chart Data
            'bookingJan' => $bookingJan,
            'bookingFeb' => $bookingFeb,
            'bookingMar' => $bookingMar,
            'bookingApr' => $bookingApr,
            'bookingMay' => $bookingMay,
            'bookingJun' => $bookingJun,
            'bookingJul' => $bookingJul,
            'bookingAug' => $bookingAug,
            'bookingSep' => $bookingSep,
            'bookingOct' => $bookingOct,
            'bookingNov' => $bookingNov,
            'bookingDec' => $bookingDec,

            'orderJan' => $orderJan,
            'orderFeb' => $orderFeb,
            'orderMar' => $orderMar,
            'orderApr' => $orderApr,
            'orderMay' => $orderMay,
            'orderJun' => $orderJun,
            'orderJul' => $orderJul,
            'orderAug' => $orderAug,
            'orderSep' => $orderSep,
            'orderOct' => $orderOct,
            'orderNov' => $orderNov,
            'orderDec' => $orderDec,


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
