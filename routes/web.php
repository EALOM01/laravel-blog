<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

//base page
Route::get('/', [PostController::class, 'index'])->name('home');

// show an individual post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

