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

    public function show($id){
        $post = Post::findORFail($id);
        return view('post', ['post' => $post]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect('/posts');
    }
}
