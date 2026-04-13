@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1>Blog Post</h1>
        <a href="/posts/create" style="padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 4px;">
            + New Post
        </a>
    </div>
    @foreach($posts as $post)
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
            <h2>
               <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p>{{ $post->content }}</p>
            <small>Posted On : {{ $post->created_at}}</small>
        </div>
    @endforeach
@endsection