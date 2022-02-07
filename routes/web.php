<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

//base page
Route::get('/', [PostController::class, 'index'])->name('home');

// show an individual post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// user registry
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

// user login and out
Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// comments
Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);