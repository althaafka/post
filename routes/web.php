<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', function () {
    $posts = [];
    if(auth()->check()){
        $posts = auth()->user()->posts()->latest()->get();
    }
    //$posts = Post::where('user_id', auth()->id())->latest()->get();
    return view('home', ['posts' => $posts]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);

// Post
Route::post('/create-post', [PostController::class, 'create']);
Route::get('/edit-post/{id}', [PostController::class, 'showEditView']);
Route::put('/edit-post/{id}', [PostController::class, 'edit']);
Route::delete('/delete-post/{id}', [PostController::class, 'delete']);
