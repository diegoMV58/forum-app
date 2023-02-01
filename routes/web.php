<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ResponseController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');
Route::get('/register', [CreateUserController::class,'create']);
Route::post('/register', [CreateUserController::class,'store']);
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy']);
Route::get('/post', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::get('/thread', [ThreadController::class, 'index']);
Route::get('/response', [ResponseController::class, 'create']);
Route::post('/response', [ResponseController::class, 'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
