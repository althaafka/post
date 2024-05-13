@extends('app')

@section('content')
<main id="main" class="flexbox-col">

@auth

    <form action="/create-post" method="POST" class="post-container" style="padding: 1em;">
        @csrf
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" placeholder="Content ..."></textarea>
        <button>Post</button>
    </form>

        @foreach ($posts as $post)
        <div class="post-container">
          <div class="post-header">
            <img src="photo-profile.png" alt="profile">
            <div style="display: flex; flex-direction: column; margin-left: 20px;">
              <span style="font-weight: 700;">{{ $post->user->name }}</span>
              <span style="font-weight: 300;">{{ $post->created_at->diffForHumans() }}</span>
            </div> 
          </div>
          <h1>{{ $post->title }}</h1>
          <p style="margin: 0 0 20px 0">{!! nl2br(e($post->content)) !!}</p>
          <div class="edit-post">
            <a href="/edit-post/{{$post->id}}"><button>Edit</button></a>
            <form action="/delete-post/{{ $post->id }}" method="POST" >
                  @csrf
                  @method('DELETE')
                  <button>Delete</button>
            </form>
          </div>
        </div>
        @endforeach

    @else

    @endauth
@endsection
</main>