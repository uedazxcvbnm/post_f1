<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post2;
use App\Models\Comment2;

class UsercomController extends Controller
{
    //
    public function index(){
        $tmps= User::all();   // Eloquent"Member"で全データ取得
            return view('layouts.user_comment', [
                "tmps" => $tmps
            ]);
    }
    public function index2(){
        $tmps= Comment2::all();   // Eloquent"Member"で全データ取得
            return view('layouts.user_comment', [
                "tmps" => $tmps
            ]);
    }
    public function index3(){
        $tmps= Post2::all();   // Eloquent"Member"で全データ取得
            return view('layouts.user_comment', [
                "tmps" => $tmps
            ]);
    }
}
