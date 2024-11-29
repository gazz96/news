<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index']);


Route::prefix('admin')->group(function(){
    Route::get('categories/table', [CategoryController::class, 'table'])->name('categories.table');
    Route::get('categories/form', [CategoryController::class, 'form'])->name('categories.form');
    Route::resource('categories', CategoryController::class);

    Route::get('users/table', [UserController::class, 'table'])->name('users.table');
    Route::get('users/form', [UserController::class, 'form'])->name('users.form');
    Route::resource('users', UserController::class);

    Route::get('posts/table', [PostController::class, 'table'])->name('posts.table');
    Route::get('posts/form', [PostController::class, 'form'])->name('posts.form');
    Route::resource('posts', PostController::class);
});
