@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<h1>Create New Post</h1>

@if($errors->any())
    <div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px;">
        <ul style="margin: 0; padding-left: 20px;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>    
@endif
<form action="/posts" method="post">
    @csrf
    <div style="margin-bottom: 15px;">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" style="width: 100%; padding: 8px;" value="{{ old('title') }}">
    </div>
    <div style="margin-bottom: 15px;">
        <label for="title">Content:</label><br>
        <textarea id="content" name="content" rows="6" style="width: 100%; padding: 8px;">{{ old('content') }}</textarea>
    </div>
    <button type="submit" style="padding: 10px 20px; background: #007bff; color: white; border: none; cursor: pointer;">
        Create Post
    </button>
</form>

<div style="margin-top: 20px;">
    <a href="/posts"><- Return back to all posts</a>
</div>
@endsection