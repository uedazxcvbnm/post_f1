<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
//Authファサード
use Illuminate\Support\Facades\Auth;


class NewpostController extends Controller
{
    //
    //middlewareによる認証制限を追加
    public function __construct()
    {
        $this->middleware('auth');
    }

    //viewの表示
    public function Newpost() {
        return view('newpost');
    }

    public function create(Request $request) {

        // フォームに入力される情報
        $name = $request->input('name');
        $contents = $request->input('contents');

        //ログインしているユーザーIDを取得
        $user_id = Auth::id();

        Post::insert(
            [
            "user_id" => $user_id,
            "name" => $name,
            "contents" => $contents,
            ]);
        
        return view('newpost');
    }  
}
