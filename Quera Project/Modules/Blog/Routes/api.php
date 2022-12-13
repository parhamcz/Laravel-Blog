<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\HomeController;
use Modules\Blog\Http\Controllers\PostController;

Route::get('/base', [HomeController::class, 'base'])->name('base');

Route::apiResource('posts', PostController::class, [
    'as' => 'api',
    'except' => ['show']
]);
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('api.posts.show');

Route::get('/search/{text}', [HomeController::class, 'search'])->name('api.posts.search');