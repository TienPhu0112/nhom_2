<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function welcome(){
        $lsImg = Gallery::all();
        return view("gallery.gallery",[
            'lsImg' => $lsImg,
            'title' => 'Gallery'
        ]);
    }

}
