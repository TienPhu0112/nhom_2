<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function welcome(Request $request){
        $search_title = $request->search_title;
        $topic = $request->topic;
        if(isset($topic)){
            $lsNews = News::where('topic','=',$topic)->paginate(4);
        }else{
            if (isset($search_title)){
                $lsNews = News::where('title','like','%'.$search_title.'%')->paginate(1);
            }else{
                $lsNews = News::paginate(4);
            }
        }
        return view("blog.blog",[
            'lsNews' => $lsNews
        ]);

    }

    public function detail($id){
        if(isset($id)){
            $news = News::find($id);
        }
        return view("blog.blog_detail",[
            'news' => $news
        ]);
    }

}
