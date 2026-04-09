<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function hello()
    {
        $name = "Sajid";
        return view('hello', ['name' => $name]);
    }

    public function about(){
        return view('about');
    }

    public function posts()
    {
        $posts = Post::all();
        return view('posts', ['posts' => $posts]);
    }
}
