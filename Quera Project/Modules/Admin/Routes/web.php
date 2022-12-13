<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminTagController;
use Modules\Admin\Http\Controllers\AdminPostController;
use Modules\Admin\Http\Controllers\AdminCategoryController;
use Modules\Admin\Http\Controllers\AdminThemeController;

Route::prefix('/admin')->group(function () {
    Route::get('/panel', 'AdminController@index');
    Route::resource('/users','AdminUserController');
    Route::resource('/posts','AdminPostController');

    Route::resource('/posts', AdminPostController::class);
    Route::get('/posts-data', [AdminPostController::class, 'data'])->name('posts.data');
    Route::post('/activate/posts/{post}', [AdminPostController::class, 'activate'])->name('posts.activate');

    Route::resource('/categories', AdminCategoryController::class);
    Route::get('/categories-data', [AdminCategoryController::class, 'data'])->name('categories.data');

    Route::resource('/tags', AdminTagController::class);
    Route::get('/tags-data', [AdminTagController::class, 'data'])->name('tags.data');

    Route::resource('/themes', AdminThemeController::class);
    Route::get('/themes-data', [AdminThemeController::class, 'data'])->name('themes.data');
    Route::post('/activate/themes/{theme}', [AdminThemeController::class, 'activate'])->name('themes.activate');
});
