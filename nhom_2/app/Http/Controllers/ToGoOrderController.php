<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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

//    public function foodorder_success(Request $request) {
//        $lsType = DishType::all();
//        $lsFood = Food::orderBy('created_at', 'desc')->get();
//
//        return view('foodorder_success')->with([
//            'lsType' => $lsType,
//            'lsFood'=> $lsFood,
//            'title' => 'foodorder_success',
//        ]);
//    } TEST FORM MAIL

    public function add_food(Request $request, $fid) {
        $food = Food::find($fid);
        \Cart::add(['id' => $fid,
            'name' => $food->name,
            'image' => $food->image,
            'qty' => $request->input('quantity'),
            'price' => $food->price,
            'weight' => 0]);

        return redirect()->back()->with('message', "$food->name has been successfully added to your cart!");
    }

    public function remove_food(Request $request, $rowId) {
        \Cart::remove($rowId);
        return redirect()->back()->with('message', "Cart has been updated!");
    }

    public function cart(Request $request) {
        $lsImg = Gallery::all();
        $lsType = DishType::all();
        $lsFood = Food::orderBy('created_at', 'desc')->get();

        return view('cart')->with([
            'lsType' => $lsType,
            'lsFood'=> $lsFood,
            'title' => 'Cart',
            'lsImg' => $lsImg
        ]);
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
        return redirect('/cart')->with('message', "Cart has been updated!");
    }

    public function place_order(Request $request) {
        $lsType = DishType::all();
        $lsFood = Food::all();
        $lsImg = Gallery::all();

        //save customer
        $cus = new Customer();
        $cus->name = $request->input('name');
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
        $order->save();

        //save food order detail
        foreach(\Cart::content() as $row) {
            $foodOrder = new FoodOrder();
            $foodOrder->order_id = $order->id;
            $foodOrder->food_id = $row->id;
            $foodOrder->food_quantity = $row->qty;
            $foodOrder->food_price = $row->price;
            $foodOrder->save();

            //update product (k c???n update s??? l?????ng)
//            $food = Food::find($row->id);
//            $food->save();
        }

        //send email
        $data = array(
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
        );
        $mail = new \App\Mail\OrderMail($data);
        \Mail::to($request->email)->send($mail);

        //destroy
        \Cart::destroy();

        //redirect to success page

        return view('foodorder_success')->with(['lsType' => $lsType,
                                                        'lsFood'=> $lsFood,
                                                        'title' => 'Order Success',
                                                        'lsImg'=>$lsImg]);
    }
//    Test giao di???n ?????t ????? th??nh c??ng

//    public function foodorder_success(Request $request) {
//        $lsImg = Gallery::all();
//        return view('/foodorder_success')->with(['title' => 'Order Success',
//                                                             'lsImg'=>$lsImg]);
//    }
}
