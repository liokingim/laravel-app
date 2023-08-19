<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::get('/posts', [PagesController::class, 'posts'])->name('posts');
Route::get('/posts-view', [PagesController::class, 'postsView'])->name('posts.view');
Route::get('/posts-view-single/{id}', [PagesController::class, 'show'])->name('posts.show');
