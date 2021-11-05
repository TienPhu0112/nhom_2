<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        $search_name = $request->search_name;
        if (isset($search_name)) {
            $lsCustomer = Customer::where('name', 'like', '%'.$search_name.'%')->paginate(4);
        } else {
            $lsCustomer = Customer::paginate(4);
        }
        return  view("customer.index")->with([
                "lsCustomer" => $lsCustomer, 'title' => 'List of customers']
        );
    }


    public function create()
    {
        return view("customer.add")->with(['title' => 'Add Customers']
        );;
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:191',
            'email' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);
        $customer= new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        $request->session()->flash("msg", "Insert customer successfully.");
        return  redirect(route("customer.index"));
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
        $customer = Customer::find($id);
        return view("customer.edit")->with(['customer' => $customer, 'title' => 'Edit Customer Information']);
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
            'name' => 'required|min:3|max:191',
            'email' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required'
        ]);
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        $customer->address = $request->input('address');
        $customer->save();
        $request->session()->flash("msg", "Update customer successfully.");
        return  redirect(route("customer.index"));
    }


    public function destroy( Request $request)
    {
        $id = (int) $request->input('id');
        $customer = Customer::find($id);
        if($customer->delete()){
            return response()->json([
               'error' => false,
               'message' => 'Delete Customer Successfully'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }

}
