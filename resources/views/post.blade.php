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
    <div style="margin-top: 30px; display: flex; gap: 10px;">
        <a href="/posts/{{ $post->id }}/edit" style="padding: 10px 20px; background: #ffc107; color: black; text-decoration: none; border-radius: 4px;">Edit Post</a>
            <form action="/posts/{{ $post->id }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this post?');">
                @csrf
                @method('DELETE')
                <button type="submit" style="padding: 10px 20px; background: #dc3545; color: white; border: none; cursor: pointer; border-radius: 4px;">Delete Post</button>
            </form>
    </div>
    <div style="margin-top: 30px;">
        <a href="/posts">Back to all posts</a>
    </div>
@endsection