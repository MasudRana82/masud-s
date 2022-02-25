<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialShareController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

//frontend route

Route::get('/',[HomeController::class,'index']);
Route::get('/category/{id}',[HomeController::class,'category']);
Route::get('/tag/{id}',[HomeController::class,'tag']);
Route::get('/post-view/{id}',[HomeController::class,'post_view']);
Route::post('/search',[HomeController::class,'search']);



//backned routes here
Route::get('/admins', [AdminController::class, 'index']);
Route::post('/admin-dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/dashboard', [SuperAdminController::class, 'dashboard']);
Route::get('/logout', [SuperAdminController::class, 'logout']);




//Post route here
Route::resource('/post/', PostController::class); //resource route
Route::get('/post/edit{posts}', [PostController::class, 'edit']);
Route::put('/post/update{post}', [PostController::class, 'update']);
Route::put('/post/delete{category}', [PostController::class, 'destroy']);
Route::get('/post-status{category}', [PostController::class, 'change_status']);

//Category routes here
// Route::get('/create',[CategoryController::class,'create']);
Route::resource('/categories/', CategoryController::class); //resource route
Route::get('/edit{category}', [CategoryController::class, 'edit']);
Route::put('/update{category}', [CategoryController::class, 'update']);
Route::put('/delete{category}', [CategoryController::class, 'destroy']);
Route::get('/cat-status{category}', [CategoryController::class, 'change_status']);


//color route here
Route::resource('/color/', TagController::class); //resource route
Route::get('/color/edit{category}', [TagController::class, 'edit']);
Route::put('/color/update{category}', [TagController::class, 'update']);
Route::put('/color/delete{category}', [TagController::class, 'destroy']);
Route::get('/color-status{category}', [TagController::class, 'change_status']);
