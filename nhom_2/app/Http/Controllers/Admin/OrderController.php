<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $lsOrder = Order::all();
        return view('admin.order.index',[
            'title' => 'Table Reservations List',
            'lsOrder' => $lsOrder
        ]);
    }


    public function create()
    {
        $lsCus = Customer::all();
        $lsTable = Table::all();
        return view('admin.order.add',[
            'title' => 'Add Table Reservations ',
            'lsCus' => $lsCus,
            'lsTable' => $lsTable
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'type' => 'required|numeric',
            'booking_date' => 'required',
            'booking_time' => 'required',
            'status' => 'required|numeric'
        ]);

        $order = new Order();
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->type = $request->input('type');
        $order->booking_date = $request->input('booking_date');
        $order->booking_time = $request->input('booking_time');
        $order->status = $request->input('status');

        $order->save();
        $request->session()->flash("msg","Add Order Succesfully");
        return redirect(route("order.index"));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $order = Order::find($id);
        return view("admin.order.edit")->with(['order' => $order, 'title' => 'Edit Table Reservation Information']);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'type' => 'required|numeric',
            'booking_date' => 'required',
            'booking_time' => 'required',
            'status' => 'required|numeric'
        ]);
        $order = Order::find($id);
        $order->name = $request->input('name');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');
        $order->type = $request->input('type');
        $order->booking_date = $request->input('booking_date');
        $order->booking_time = $request->input('booking_time');
        $order->status = $request->input('status');
        $order->save();
        $request->session()->flash("msg", "Update table reservation successfully.");
        return  redirect(route("order.index"));
    }


    public function destroy(Request $request)
    {
        $id = (int) $request->input('id');
        $order = Order::find($id);
        if($order->delete()){
            return response()->json([
                'error' => false,
                'message' => 'Delete Table Reservation Successfully'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
