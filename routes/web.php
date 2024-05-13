<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $posts = auth()->user()->posts()->latest()->get();
        return view('home', ['posts' => $posts]);
    });

    // Other authenticated routes
    Route::post('/create-post', [PostController::class, 'create']);
    Route::get('/edit-post/{id}', [PostController::class, 'showEditView']);
    Route::put('/edit-post/{id}', [PostController::class, 'edit']);
    Route::delete('/delete-post/{id}', [PostController::class, 'delete']);
});

// Unauthenticated routes
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
