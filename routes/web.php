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
Route::get('/admin/category', [AdminController::class, 'category'])->middleware('admins');
Route::get('/admins/category-delete/{id}', [AdminController::class, 'deleteCategory'])->middleware('admins');
Route::get('/admin/posts', [AdminController::class, 'posts'])->middleware('admins');
Route::get('/admin/delete-post/{id}', [AdminController::class, 'destroyPost'])->middleware('admins');
Route::get('/admin/edit-post/{id}', [AdminController::class, 'editPost'])->middleware('admins');
// for post request
Route::post('/login', [AdminController::class, 'login']);
Route::post('/admin/news-add',[AdminController::class, 'addNews'])->middleware('admins');
Route::post('/admin/category-add',[AdminController::class, 'categoryAdd'])->middleware('admins');
Route::post('/admin/update-post/{id}',[AdminController::class, 'update'])->middleware('admins');
