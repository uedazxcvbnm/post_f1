<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 

class PostController extends Controller
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
        $posts = DB::select('select * from posts');
        //$data = ['title' => 'メンバーリスト', 'members' => $members];
        $data = ['posts' => $posts];
        return view('post', $data);
    }*/
    /*public function index() {

        $posts = Post_view::all();   // Eloquent"Member"で全データ取得
        return view('list', [
            "posts" => $posts
        ]);
    }*/
    public function index(){
        $post=Post::find(1);
        return view('posts',['posts'=>$post,'comments'=> $post->comment]);
    }
}
