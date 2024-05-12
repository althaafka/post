<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create(Request $request){
        $post_input = $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post_input['title'] = strip_tags($post_input['title']);
        $post_input['content'] = strip_tags($post_input['content']);
        $post_input['user_id'] = auth()->id();
        Post::create($post_input);

        return redirect('/');
    }
}
