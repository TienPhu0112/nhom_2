<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $lsImg = Gallery::all();
        return view('admin.gallery.index',[
            'title' => 'List of Images',
            'lsImg' => $lsImg
        ]);
    }


    public function create()
    {
        return view('admin.gallery.add',[
            'title' => 'More photos',
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required|numeric',
        ]);

        $gallery = new Gallery();
        $gallery->topic = $request->input('topic');
        $imagePath = "";
        if($request->hasFile("image")) {
            $imagePath = $request->image->store('gallery');
            $imagePath = 'img/'.$imagePath;
        }
        $gallery->image = $imagePath;

        $gallery->save();
        $request->session()->flash("success","More Pictures of Success");
        return redirect(route("gallery.index"));
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


    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view("admin.gallery.edit")
            ->with(['gallery' => $gallery,
                'title' => 'Edit Image Content',]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'topic' => 'required|numeric',
        ]);

        $gallery = Gallery::find($id);
        $gallery->topic = $request->input('topic');
        $imagePath = "";
        if($request->hasFile("image")) {
            $imagePath = $request->image->store('gallery');
            $imagePath = 'img/'.$imagePath;
            $gallery->image = $imagePath;
        }
        $gallery->save();
        $request->session()->flash("success","Add successful image");
        return redirect(route("gallery.index"));
    }


    public function destroy(Request $request)
    {
        $id = (int) $request->input('id');
        $gallery = Gallery::find($id);
        if($gallery->delete()){
            return response()->json([
                'error' => false,
                'message' => 'Delete image successfully'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
