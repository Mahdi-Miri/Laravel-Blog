<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{

    public function dashboard()
    {
        $post = Post::all();


        return view('admin\pages\dashboard' , compact('post'));
    }
    public function index(){
        $post = Post::all();
        return view('home' , compact('post'));
    }
    public function show($id){
//        $post = Where('id',$id)->first();
        $post = Post::Where('id',$id)->first();
        return view('admin.pages.post.dteail',compact('post'));
    }

}

