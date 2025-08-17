<?php

use App\Http\Controllers\commentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\postController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);

Route::get('/job', [JobController::class, 'index']);

Route::get('/about', [IndexController::class, 'about']);

Route::get('/contact', [IndexController::class, 'contact']);

Route::get('/post', [postController::class, 'index']);

Route::get('/post/create', [postController::class, 'create']);

Route::get('/post/delete', [postController::class, 'delete']);

Route::get('/post/{id}', [postController::class, 'look']);

Route::get('/comment', [commentController::class, 'index']);

Route::get('/comment/create', [commentController::class, 'create']);

Route::get('/tag', [TagController::class, 'index']);

Route::get('/tag/create', action: [TagController::class, 'create']);

Route::get('/test_many_to_many', action: [TagController::class, 'test_many_to_many']);