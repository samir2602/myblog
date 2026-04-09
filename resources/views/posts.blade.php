@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Blog Post</h1>
    @foreach($posts as $post)
        <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <small>Posted On : {{ $post->created_at}}</small>
        </div>
    @endforeach
@endsection