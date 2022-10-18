<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Watchs;
use App\Models\Descs;
use App\Models\User_Registers;
use App\Models\Wishlist;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// http://127.0.0.1:8000/api/movie
Route::get('/movie', function(){

    $watch = Watchs::orderBy('id')->get();

    return $watch;

});

// http://127.0.0.1:8000/api/descs
Route::get('/descs', function(){

    $descs = Descs::orderBy('id')->get();

    return $descs;

});

// http://127.0.0.1:8000/api/descs
Route::get('/descs/{id}', function($id){

    $descs = Descs::find($id);

    return $descs;

});

// http://127.0.0.1:8000/api/user_register
Route::get('/user_register', function(){

    $user_register = User_Registers::orderBy('id')->get();

    return $user_register;

});

// http://127.0.0.1:8000/api/wishlist
Route::get('/wishlist', function(){

    $wish = Wishlist::orderBy('id')->get();

    return $wish;

});