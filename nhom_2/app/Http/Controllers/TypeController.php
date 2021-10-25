<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $lsType = DishType::all();
        return view('type.index')->with(
            ["lsType" => $lsType, 'title' => 'Trang quản trị loại đồ ăn']
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type.add')->with(
                ['title' => 'Thêm mới']
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
            'name' => 'required|min:1|max:255|unique:dish_types'
        ]);
        $type = new DishType();
        $type->name = $request->input('name');
        $type->save();
        $request->session()->flash("msg","Insert new type successfully.");
        return redirect(route("type.index"));
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
        $type = DishType::find($id);
        return view('type.edit')->with(['type'=>$type, 'title' => 'Edit type']);
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
            'name' => 'required|min:1|max:255|unique:dish_types,name,'.$id
        ]);
        $type = DishType::find($id);
        $type->name = $request->input('name');
        $type->updated_at = Now();
        $type->save();
        $request->session()->flash("msg","Edit type successfully.");
        return redirect(route('type.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $type = DishType::find($id);
        $type->delete();
        $request->session()->flash('msg','Delete type successfully.');
        return redirect(route('type.index'));
    }
}
