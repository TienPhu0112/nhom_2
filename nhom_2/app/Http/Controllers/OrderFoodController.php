<?php

namespace App\Http\Controllers;

use App\Models\FoodOrder;
use App\Models\TogoOrder;
use Illuminate\Http\Request;

class OrderFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lsOrder = TogoOrder::orderBy('created_at', 'desc')->get();
        return view('foodorder.index')->with(
            ["lsOrder" => $lsOrder,
             "title" => "Food Orders List"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = TogoOrder::find($id);
        return view('foodorder.show')->with(
            ["order" => $order, "title" => "Food Order Detail"]
        );
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
    public function changeOrderStatus($status, $id) {
        $order = TogoOrder::find($id);
        $order->status = $status;
        $order->save();
        return redirect()->route('foodorder.show',$id);
    }

    public function changeStatusOrderJson(Request $request) {
        $id = $request->id;
        $status = $request->status;
        $order = TogoOrder::find($id);
        $order->status = $status;
        $order->save();
        return response()->json([
            'status' => 'OK',
            'desc' => 'Change status success',
        ]);
    }
}
