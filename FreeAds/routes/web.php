<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
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

Route::get('/', [IndexController::class, 'showIndex'])->name('welcome');
Route::get('/articles', [PostController::class, 'showPosts'])->name('posts');
Route::get('/posts/create', [PostController::class, 'createArticles'])->name('articles.create');
Route::post('/posts/create', [PostController::class, 'storeArticles'])->name('articles.store');
Route::get('/posts/{id}', [PostController::class, 'showArticles'])->name('articles.show');
Route::get('/register', [PostController::class, 'showContact'])->name('register');