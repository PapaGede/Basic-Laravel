<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

    public function getIndex(){
        $post=Post::OrderBy('id','desc')->limit(4)->get();
        return view('welcome')->withPosts($post);
    }

    public function getAbout(){
        return view('about');
    }

    public function getContact(){
        return view('contact');
    }

}
