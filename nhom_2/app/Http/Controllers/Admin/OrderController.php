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
            'title' => 'Danh sách Đơn đặt bàn',
            'lsOrder' => $lsOrder
        ]);
    }


    public function create()
    {
        $lsCus = Customer::all();
        $lsTable = Table::all();
        return view('admin.order.add',[
            'title' => 'Thêm đơn đặt bàn ',
            'lsCus' => $lsCus,
            'lsTable' => $lsTable
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|numeric',
            'table_id' => 'required|numeric',
            'booking_date' => 'required',
            'status' => 'required|numeric'
        ]);

        $order = new Order();
        $order->customer_id = $request->input('customer_id');
        $order->table_id = $request->input('table_id');
        $order->booking_date = $request->input('booking_date');
        $order->status = $request->input('status');

        $order->save();
        $request->session()->flash("msg","Thêm đơn đặt bàn thành công");
        return redirect(route("order.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
