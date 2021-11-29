<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post2;
use App\Models\Comment2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Post2Controller extends Controller
{
    //
    /*public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }*/
    /*public function index()
    {
        $post2s = DB::select('select * from post2s');
        //$data = ['title' => 'メンバーリスト', 'members' => $members];
        $data = ['post2s' => $post2s];
        return view('post2', $data);
    }*/
    public function index() {

        $post2s = Post2::all();   // Eloquent"Member"で全データ取得
        return view('post2', [
            "post2s" => $post2s
        ]);
    }
    public function index2() {
        $post2s = Post2::all(); 
        $comment2s = Comment2::all();   // Eloquent"Member"で全データ取得
        return view('post2', [
            "post2s" => $post2s,"comment2s" => $comment2s
        ]);
    }
    /*public function index(){
        $post2=Post2::find(1);
        return view('post2s');
    }*/
}
