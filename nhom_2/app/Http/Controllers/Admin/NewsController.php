<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
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
        return view('admin.news.add',[
            'title' => 'Thêm tin tức ',
        ]);
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
