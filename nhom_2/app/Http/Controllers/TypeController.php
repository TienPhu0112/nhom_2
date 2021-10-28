<?php

namespace App\Http\Controllers;

use App\Models\DishType;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index(Request $request)
    {
        $lsType = DishType::all();
        return view('type.index')->with(
            ["lsType" => $lsType, 'title' => 'Danh sách loại đồ ăn']
        );
    }


    public function create()
    {
        return view('type.add')->with(
                ['title' => 'Thêm loại đồ ăn']
            );
    }


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


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $type = DishType::find($id);
        return view('type.edit')->with(['type'=>$type, 'title' => 'Edit type']);
    }


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
