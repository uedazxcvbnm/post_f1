<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewpostController extends Controller
{
    //
    //middlewareによる認証制限
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
        $comment = $request->input('comment');

    //ログインしているユーザーIDを取得
        $user_id = Auth::id();

        Post::insert(
            [
            "name" => $name,
            "comment" => $comment,
            "user_id" => $user_id,
            ]);
    }
}