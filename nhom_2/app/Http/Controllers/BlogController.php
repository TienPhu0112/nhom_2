<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function welcome(Request $request){
        $lsImg = Gallery::all();
        $popular_news = News::where('favorite','=',1)->get();
        $search_title = $request->search_title;
        $topic = $request->topic;
        if(isset($topic)){
            $lsNews = News::where('topic','=',$topic)->paginate(4);
        }else{
            if (isset($search_title)){
                $lsNews = News::where('title','like','%'.$search_title.'%')->paginate(4);
            }else{
                $lsNews = News::paginate(4);
            }
        }
        return view("blog.blog",[
            'lsNews' => $lsNews,
            'popular_news' => $popular_news,
            'title' => 'Blog',
            'lsImg' => $lsImg
        ]);

    }

    public function detail($id){
        $lsImg = Gallery::all();
        $popular_news = News::where('favorite','=',1)->get();
        if(isset($id)){
            $news = News::find($id);
        }
        return view("blog.blog_detail",[
            'news' => $news,
            'popular_news' => $popular_news,
            'title' => 'Blog Detail',
            'lsImg' => $lsImg
        ]);
    }

}
