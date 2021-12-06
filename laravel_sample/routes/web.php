<?php

use Illuminate\Support\Facades\Route;
//use app\Http\Controllers\ComedianController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Post2Controller;
use App\Http\Controllers\UsercomController;

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

/*ホーム画面デフォルト
Route::get('/', function () {
    return view('welcome2');
});*/

//ホーム画面　掲示板
Route::get('/', function () {
    return view('welcome3');
});

Route::get('/index', 'HelloController@index');
//Route::get('/comedian', [ComedianController::class,'index']);
Route::get('/posts', [PostController::class,'index']);
/*Route::get('/greeting', function () {
    return 'Hello World';
});*/
//Route::get('/user', [UserController::class, 'index']);
//Route::get('/comedian', [ComedianController::class,'index']);
//Route::get('/',[App/Http/Controllers\Controller::class,'index'])->name('home');


Route::get('/post2s', [Post2Controller::class,'index']); 
Route::get('/post2s', [Post2Controller::class,'index2']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//レイアウト　テンプレート
Route::get('/usercom',[UsercomController::class,'index']);
Route::get('/comment_tmp',[UsercomController::class,'index2']);
Route::get('/post_tmp',[UsercomController::class,'index3']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
