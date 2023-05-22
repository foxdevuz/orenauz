<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/news/{post:slug}', [PostController::class, 'show']);
Route::get('/category/{category:name}', [CategoryController::class, 'post']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin_logged');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->middleware('admins');
// for post 
Route::post('/login', [AdminController::class, 'login']);
