<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lsEvent = Event::all();
        return view('event.index',[
            'title' => 'List Of Events',
            'lsEvent' => $lsEvent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.add',[
            'title' => 'Add event'
        ]);
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
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'status' => 'required',
            'start_time' => 'required'
        ]);

        $event = new Event();
        $event->title = $request->input('title');
        $event->content = $request->input('content');
        $event->start_time = $request->input('start_time');
        $event->image = $request->input('image');
        $event->status = $request->input('status');
        $imagePath = "";
        if($request->hasFile("image")) {
            $imagePath = $request->image->store('event-img');
            $imagePath = 'img/'.$imagePath;
        }
        $event->image = $imagePath;

        $event->save();
        $request->session()->flash("msg","Add Success event");
        return redirect(route("event.index"));
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
        $event = Event::find($id);
        return view("event.edit")
            ->with(['event' => $event,
                'title' => 'Edit event content']);
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
            'title' => 'required',
            'image' => 'required',
            'content' => 'required',
            'status' => 'required',
            'start_time' => 'required'
        ]);

        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->content = $request->input('content');
        $event->start_time = $request->input('start_time');
        $event->image = $request->input('image');
        $event->status = $request->input('status');
        $imagePath = "";
        if($request->hasFile("image")) {
            $imagePath = $request->image->store('event-img');
            $imagePath = 'img/'.$imagePath;
        }
        $event->image = $imagePath;

        $event->save();
        $request->session()->flash("msg","Edit Success event");
        return redirect(route("event.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = (int) $request->input('id');
        $event = Event::find($id);
        if($event->delete()){
            return response()->json([
                'error' => false,
                'message' => 'Delete Success Event'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
