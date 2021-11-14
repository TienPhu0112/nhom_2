<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsUser = User::all();
        return view("admin.users.index")->with(['lsUser' => $lsUser, "title" => "User List"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.users.add")->with(["title" => "Add User"]);
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
            'name' => 'required|min:3|max:191',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $imagePath = "";
        if($request->hasFile("avatar")) {
            $imagePath = $request->avatar->store('avatar');
            $imagePath = 'img/'.$imagePath;
        }
        $user->avatar = $imagePath;

        $user->save();

        $request->session()->flash("success","Insert user successfully");
        return redirect(route("user.index"));
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
        $user = User::find($id);
        return view('admin.users.edit')->with(['user' => $user, 'title' => 'Update User']);
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
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $imagePath = "";
        if($request->hasFile("avatar")) {
            $imagePath = $request->avatar->store('avatar');
            $imagePath = 'img/'.$imagePath;
        }
        $user->avatar = $imagePath;

        $user->save();

        $request->session()->flash("success","Edit user successfully");
        return redirect(route("user.index"));
    }


    public function destroy(Request $request)
    {
        $id = (int) $request->input('id');
        $customer = User::find($id);
        if($customer->delete()){
            return response()->json([
                'error' => false,
                'message' => 'Delete User Successfully'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
