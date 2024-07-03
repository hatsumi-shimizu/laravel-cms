<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');

Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/product', [PostController::class, 'product'])
    ->name('posts.product');

Route::get('/posts/news', [PostController::class, 'news'])
    ->name('posts.news');

// 後でインデックス番号など要修正
Route::get('/posts/article', [PostController::class, 'article'])
    ->name('posts.article');

Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');

Route::get('/posts/{post}/update', [PostController::class, 'update'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

Route::patch('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');
