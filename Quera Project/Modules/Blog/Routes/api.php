<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\CategoryController;
use Modules\Blog\Http\Controllers\CommentController;

Route::apiResource('categories', CategoryController::class, [
    'as' => 'api'
]);

Route::apiResource('comments', CommentController::class, [
    'as' => 'api'
]);
Route::get('/post/comments/{post}', [CommentController::class, 'index']);