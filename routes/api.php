<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('posts', [PostsController::class, 'index']);
Route::get('comments', [CommentsController::class, 'index']);
Route::post('posts', [PostsController::class, 'store']);
Route::put('posts/{id}/likes', [PostsController::class, 'updateLikes']);
