<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchController;
use App\Http\Controllers\DescController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\WishlistController;
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

Route::get('/', function () {
    return view('/watchs/list');   
});

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest')->name('login');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
// Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/watchs/list', [WatchController::class, 'list'])->middleware('auth');
Route::get('/watchs/addform', [WatchController::class, 'addForm'])->middleware('auth');
Route::post('/watchs/add', [WatchController::class, 'add'])->middleware('auth');
Route::get('/watchs/editform/{watch:id}', [WatchController::class, 'editForm'])->middleware('auth');
Route::post('/watchs/edit/{watch:id}', [WatchController::class, 'edit'])->middleware('auth');
Route::get('/watchs/delete/{watch:id}', [WatchController::class, 'delete'])->middleware('auth');
Route::get('/watchs/image/{watch:id}', [WatchController::class, 'imageForm'])->middleware('auth');
Route::post('/watchs/image/{watch:id}', [WatchController::class, 'image'])->middleware('auth');

Route::get('/descs/list', [DescController::class, 'list'])->middleware('auth');
Route::get('/descs/addform', [DescController::class, 'addForm'])->middleware('auth');
Route::post('/descs/add', [DescController::class, 'add'])->middleware('auth');
Route::get('/descs/editform/{descs:id}', [DescController::class, 'editForm'])->middleware('auth');
Route::post('/descs/edit/{descs:id}', [DescController::class, 'edit'])->middleware('auth');
Route::get('/descs/delete/{descs:id}', [DescController::class, 'delete'])->middleware('auth');
Route::get('/descs/image/{descs:id}', [DescController::class, 'imageForm'])->middleware('auth');
Route::post('/descs/image/{descs:id}', [DescController::class, 'image'])->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('guest');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('guest');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/wishlist/delete/{wishlist:id}', [WishlistController::class, 'delete'])->where('wishlist', '[0-9]+')->middleware('auth');
Route::post('/wishlist/add', [WishlistController::class, 'add'])->middleware('auth');
Route::get('/wishlist/list', [WishlistController::class, 'list'])->middleware('auth');
