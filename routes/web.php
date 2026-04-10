<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/new', [PostController::class, 'create']);
Route::post('/posts/new', [PostController::class, 'store']);
Route::get('/posts/{post}', [PostController::class, 'show']);