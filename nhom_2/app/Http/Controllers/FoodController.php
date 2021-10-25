<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lsFood = Food::all();
        return view('food.index')->with(
            ["lsFood" => $lsFood, 'title' => 'Trang quản trị món ăn']
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsType = DishType::all();
        return view('food.add')->with(
            ['lsType' => $lsType, 'title' => 'Thêm mới']
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:1|max:255|unique:food',
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'status' => 'required',
            'dishtype_id' => 'required',
        ]);
        $food = new Food();
        $food->name = $request->input('name');
        $food->price = $request->input('price');
        $food->sale_price = $request->input('sale_price');
        $food->status = $request->input('status');
        $food->dishtype_id = $request->input('dishtype_id');
        $imagePath = "";
        if($request->hasFile("image")) {
            $imagePath = $request->image->store('food-img');
            $imagePath = 'img/'.$imagePath;
        }
        $food->image = $imagePath;

        $food->save();

        $request->session()->flash("msg","Insert food successfully.");
        return redirect(route("food.index"));
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
        $lsType = DishType::all();
        $food = Food::find($id);
        return view('food.edit')->with(['food' => $food, 'lsType' => $lsType,
                                            'title' => 'Edit food']);
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
        $request->validate([
            'name' => 'required|min:1|max:255|unique:food,name,'.$id,
            'price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'status' => 'required',
            'dishtype_id' => 'required',
        ]);
        $food = Food::find($id);
        $food->name = $request->input('name');
        $food->price = $request->input('price');
        $food->sale_price = $request->input('sale_price');
        $food->status = $request->input('status');
        $food->dishtype_id = $request->input('dishtype_id');
        $imagePath = "";
        if($request->hasFile("image")) {
            $imagePath = $request->image->store('food-img');
            $imagePath = 'img/'.$imagePath;
            $food->image = $imagePath;
        }
        $food->save();

        $request->session()->flash("msg","Insert food successfully.");
        return redirect(route("food.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $food = Food::find($id);
        $food->delete();
        $request->session()->flash('msg','Delete food successfully.');
        return redirect(route('food.index'));
    }
}
