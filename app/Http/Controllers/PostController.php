<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::find(1);
        //$comments = $posts->comment;
        $data = ['posts' => $posts, 'comments' => $posts->comments];
        return view('post', $data);
    }
}
