<?php

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

Route::get('/', function () {
    return view('welcome');
});

# layout部分

use App\Http\Controllers\LayoutController;
Route::get('/layout', [LayoutController::class, 'index']);
Route::get('/layout/users', [LayoutController::class, 'users']);
Route::get('/layout/posts', [LayoutController::class, 'posts']);
Route::get('/layout/comments', [LayoutController::class, 'comments']);

use App\Http\Controllers\NewpostController;
//newpost
Route::get('/newpost', [NewpostController::class,'Newpost']);
//POSTメソッドの処理
Route::post('/newpost', [NewpostController::class,'create']);

//Authファサード
use Illuminate\Support\Facades\Auth;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
