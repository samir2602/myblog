@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p style="color: #666; font-size: 14px;">
        Posted on : {{ $post->created_at->format('F j, Y')}}
    </p>
    <div style="margin-top: 20px; line-height: 1.6;">
        {{ $post->content}}
    </div>
    <div style="margin-top: 30px;">
        <a href="/posts">Back to all posts</a>
    </div>
@endsection