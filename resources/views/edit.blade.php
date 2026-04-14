@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h1>Edit Post</h1>
    @if($errors->any())
        <div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/posts/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 15px;">
            <label for="title">Title:</label><br>
            <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="content">Content:</label><br>
            <textarea id="content" name="content" rows="6" style="width: 100%; padding: 8px;">{{ old('content', $post->content) }}</textarea>
        </div>
        <button type="submit" style="padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer;">
            Update Post
        </button>
    </form>

    <div style="margin-top:20px;">
        <a href="/posts/{{ $post->id }}">Back To post</a>
    </div>
@endsection