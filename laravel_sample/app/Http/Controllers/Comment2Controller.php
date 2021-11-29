<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Comment2;
use Illuminate\Http\Request;


class Comment2Controller extends Controller
{
    //
    public function index() {

        $comment2s = Comment2::all();   // Eloquent"Member"で全データ取得
        return view('comment2', [
            "comment2s" => $comment2s
        ]);
    }
}
