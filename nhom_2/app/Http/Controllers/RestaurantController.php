<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DishType;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Table;
use Illuminate\Support\Facades\DB;


class RestaurantController extends Controller
{
    public function welcome(Request $request)
    {
        $lsImg = Gallery::all();
        $lsFood = Food::orderBy('created_at', 'desc')->take(1)->get();
        $lsType = DishType::orderBy('created_at', 'desc')->take(9)->get();
        $lsEvent = Event::all();
        $lsNews = News::orderBy('created_at', 'desc')->take(3)->get();
        $length = count($lsEvent);
        return view("welcome")->with(['lsType'=>$lsType,
                                            'lsFood'=>$lsFood,
                                            'lsImg'=>$lsImg,
                                            'lsEvent'=>$lsEvent,
                                            'lsNews'=>$lsNews,
                                            'length' => $length,
                                            'title'=>'Home']);
    }

    public  function  reservation(Request  $request){
        $lsImg = Gallery::all();
        return view("reservation")->with(['title'=>'Reservation','lsImg' => $lsImg]);
    }

    public function booking(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'booking_date' => 'required',
            'booking_time' => 'required',
            'status' => 'required|numeric'
        ]);

        $day = substr($request->input('booking_date'),0,2);
        $month = substr($request->input('booking_date'),3,2);
        $year = substr($request->input('booking_date'),6,4);

        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $booking_date= $year."-".$month."-".$day;
        $booking_time = $request->input('booking_time');

        $booking_date_time = $booking_date." ".$booking_time;
        $booking_date_time = strtotime($booking_date_time);
        $now = time();

        if ($request->input('people')==1 || $request->input('people')==2 ){
            $type = 2;
        }

        if ($request->input('people')==3|| $request->input('people')==4 ){
            $type = 4;
        }

        if ($request->input('people')==5|| $request->input('people')==6 ){
            $type = 6;
        }

        if ($request->input('people')==7|| $request->input('people')==8 ){
            $type = 8;
        }

        if ($request->input('people')==9|| $request->input('people')==10 ){
            $type = 10;
        }

        if ($request->input('people')==11|| $request->input('people')==12){
            $type = 12;
        }

        $status = $request->input('status');

        $filter_booking = DB::table('orders')->where('booking_date',$booking_date)
            ->where('booking_time',$booking_time)
            ->where('type',$type)
            ->where('status',$status)
            ->count();

        $count_table = DB::table('tables')->where('type',$type)->value('quantity');

        if (($booking_date_time - $now < 0)){
            $request->session()->flash("msg_f","Add Order Failed! Please don't select a time period in the past!");
            if($request->input('route') == 1){
                return redirect(route("welcome"));
            }else{
                return redirect(route("reservation"));
            }
        }

        if ($filter_booking < $count_table){
            $order = new Order();
            $order->name = $request->input('name');
            $order->phone = $request->input('phone');
            $order->email = $request->input('email');
            $order->type = $type;
            $order->guest_number = $request->input('people');
            $order->booking_date = $booking_date;
            $order->booking_time = $request->input('booking_time');
            $order->status = $request->input('status');

            $order->save();
            $request->session()->flash("msg","Add Order Succesfully! Thanks For Choosing Our Restaurant!");
            if($request->input('route') == 1){
                return redirect(route("welcome"));
            }else{
                return redirect(route("reservation"));
            }
        }else{
            $request->session()->flash("msg_f","Add Order Failed! We Don't Have Available Table For You!");
            if($request->input('route') == 1){
                return redirect(route("welcome"));
            }else{
                return redirect(route("reservation"));
            }

        }


    }

    public function about(Request $request)
    {
        $lsImg = Gallery::all();
        return view("about")->with([
            'lsImg'=>$lsImg,
            'title'=>'About']);
    }


    public function contact(Request $request)
    {
        $lsImg = Gallery::all();
        return view("contact")->with([
            'lsImg'=>$lsImg,
            'title'=>'Contact']);
    }
}
