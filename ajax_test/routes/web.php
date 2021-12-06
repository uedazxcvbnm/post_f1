<?php
//ComedianControllerからComedianController2に名前を変えた
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\View
use App\Http\Controllers\Ajax\ComedianController2; //ComedianControllerを書き忘れていた
use App\Http\Controllers\ComedianController;
use App\Models\Comedian;
use Illuminate\Http\Request;//これが足りておらず、エラーになっていた
//todobook
use App\Http\Controllers\Ajax\TodobookController;
use App\Http\Controllers\TodobookController2;
use App\Models\Todobook;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('ajax/comedian', [ComedianController2::class,'index']);
Route::get('comedian', [ComedianController::class,'index']);
Route::post("addcomedian", function(Request $request){
    $comedians = new Comedian;
    $comedians->name = $request->name;
    $comedians->save();
    //dd($request);
    return ;//('/comedian');
});
Route::delete('deletecomedian/{id}',function($id){
    $comedians = new Comedian;
    $comedians::where('id',$id) -> delete();
    return ;//('/comedian');
});
Route::patch('updatecomedian',function(Request $request){
    $comedians = new Comedian;
    $comedians::where('id',$request->id) -> update(['name'=> $request->name]);
    return ;
});*/

//Todobook 本の追加しかできない
Route::get('ajax/todobook', [TodobookController::class,'index']);

//todobook 追加・更新・削除機能版
Route::get('todobook', [TodobookController2::class,'index']);
Route::post("addtodobook", function(Request $request){
    $todobooks = new Todobook;
    $todobooks->book_name = $request->book_name;
    $todobooks->book_priority = $request->book_priority;
    $todobooks->save();
    //dd($request);
    return ;//('/comedian');
});
Route::delete('deletetodobook/{id}',function($id){
    $todobooks = new Todobook;
    $todobooks::where('id',$id) -> delete();
    return ;//('/comedian');
});
//複数のカラムをデータを送信する際（book_nameとbook_priority）の書き方を、失敗していた
Route::patch('updatetodobook',function(Request $request){
    $todobooks = new Todobook;
    $todobooks::where('id',$request->id) -> update(['book_name'=> $request->book_name,'book_priority'=> $request->book_priority]); 
    return ;
});

//Todobook 本の順番ドロップダウン選択
Route::get('ajax/todobook2', [TodobookController::class,'index2']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
