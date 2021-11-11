<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $seach_type=$request->seach_type;
        if(isset($seach_type)){
            $lsTable=Table::where('type','like','%'.$seach_type.'%')->paginate(4);
        }else {
            $lsTable = Table::paginate(4);
        }
        return view("table.index")->with(['lsTable' => $lsTable, 'title' => 'Table Administration Page']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lsTable = Table::all();
        return view("table.add")->with(['lsTable'=>$lsTable,'title' => 'Add New Table']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'type' => 'required|min:1|',
                'quantity' => 'required'
            ]);

            $table=new Table();
            $table->type=$request->input('type');
            $table->quantity=$request->input('quantity');
            $table->Save();

            $request->session()->flash("msg", "Insert table successfully.");
            return  redirect(route("table.index"));

        }
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


    public function destroy(Request $request)
    {
        $id = (int) $request->input('id');
        $table = Table::find($id);
        if($table->delete()){
            return response()->json([
                'error' => false,
                'message' => 'Clear Success Table'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
