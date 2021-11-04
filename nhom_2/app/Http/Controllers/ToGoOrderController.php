<?php

namespace App\Http\Controllers;

use App\Models\FoodOrder;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\DishType;
use App\Models\Food;
use App\Models\TogoOrder;

class ToGoOrderController extends Controller
{
    public function welcome(Request $request) {
        $lsType = DishType::all();
        $lsFood = Food::orderBy('created_at', 'desc')->take(4)->get();

        return view("welcome")->with(['lsType' => $lsType, 'lsFood'=> $lsFood, 'title' => 'Welcome']);
    }

    public function menu(Request $request) {
        $lsImg = Gallery::all();
        $lsType = DishType::all();
        $lsFood = Food::orderBy('created_at', 'desc')->get();


        return view('menu')->with([
            'lsType' => $lsType,
            'lsFood'=> $lsFood,
            'title' => 'Menu',
            'lsImg' => $lsImg,
        ]);
    }
    public function add_food(Request $request, $fid) {
        $food = Food::find($fid);
        \Cart::add(['id' => $fid,
            'name' => $food->name,
            'qty' => $request->input('quantity'),
            'price' => $food->price,
            'weight' => 0]);
        return redirect()->back();
    }

    public function cart(Request $request) {
        return view('cart');
    }

    public function clear_cart(Request $request) {
        \Cart::destroy();
        return redirect('/menu');
    }

    public function update_cart(Request $request) {
        $qty = $request->quantity;
        $rowid = $request->rowid;
        foreach ($rowid as $key => $rid) {
            \Cart::update($rid, $qty[$key]);
        }
        return redirect('/cart');
    }
    public function place_order(Request $request) {
        //save customer
        $cus = new Customer();
        $cus->first_name = $request->input('name');
        $cus->address = $request->input('address');
        $cus->phone = $request->input('phone');
        $cus->email = $request->input('email');
        $cus->save();
        $cus_id = $cus->id;

        //save order
        $order = new TogoOrder();
        $order->customer_id = $cus_id;
        $order->status = 0;
        $order->total = \Cart::total(2, '.', '');
        $order->booking_date = Now();
        $order->save();

        //save food order detail
        foreach(\Cart::content() as $row) {
            $foodOrder = new FoodOrder();
            $foodOrder->order_id = $order->id;
            $foodOrder->food_id = $row->id;
            $foodOrder->food_quantity = $row->qty;
            $foodOrder->food_price = $row->price;
            $foodOrder->save();

            //update product
            $food = Food::find($row->id);
            $food->quantity = $food->quatity - $row->qty;
            $food->save();
        }

        //send email
//        $data = array(
//            'name' => $request->first_name.' '.$request->last_name,
//            'address' => $request->street_address
//        );
//        $mail = new \App\Mail\OrderMail($data);
//        \Mail::to($request->email_address)->send($mail);

        //destroy
        \Cart::destroy();

        //redirect to success page
        return view("order_success");
    }
}
