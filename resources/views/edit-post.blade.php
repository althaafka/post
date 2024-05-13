@extends('app')

@section('content')
<main id="main" class="flexbox-col">
    <form action="/edit-post/{{$post->id}}" method="POST" class="post-container" style="padding: 1em;">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->title }}">
        <textarea name="content" style="min-height: 500px;">{{ $post->content }}</textarea>
        <button>Save</button>
    </form>
</main>