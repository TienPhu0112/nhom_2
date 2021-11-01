<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $lsNews = News::all();
        return view('admin.news.index',[
            'title' => 'Danh sách Tin tức',
            'lsNews' => $lsNews
        ]);
    }


    public function create()
    {
        $lsUser = User::all();
        return view('admin.news.add',[
            'title' => 'Thêm tin tức ',
            'lsUser' => $lsUser
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'author_id' => 'required|numeric',
            'topic' => 'required|numeric',
            'title' => 'required',
            'content' => 'required',
            'sub_content' => 'required',
        ]);

        $news = new News();
        $news->author_id = $request->input('author_id');
        $news->topic = $request->input('topic');
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->sub_content = $request->input('sub_content');

        $news->save();
        $request->session()->flash("msg","Thêm tin tức thành công");
        return redirect(route("news.index"));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $lsUser = User::all();
        $news = News::find($id);
        return view("admin.news.edit")
            ->with(['news' => $news,
                'title' => 'Sửa nội dung tin tức',
                'lsUser' => $lsUser]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'author_id' => 'required|numeric',
            'topic' => 'required|numeric',
            'title' => 'required',
            'content' => 'required',
            'sub_content' => 'required',
        ]);

        $news = News::find($id);
        $news->author_id = $request->input('author_id');
        $news->topic = $request->input('topic');
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->sub_content = $request->input('sub_content');

        $news->save();
        $request->session()->flash("msg","Sửa tin tức thành công");
        return redirect(route("news.index"));
    }


    public function destroy(Request $request)
    {
        $id = (int) $request->input('id');
        $news = News::find($id);
        if($news->delete()){
            return response()->json([
                'error' => false,
                'message' => 'Xóa tin tức thành công'
            ]);
        }

        return response()->json([
            'error' => true
        ]);
    }
}
