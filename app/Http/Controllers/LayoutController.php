<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class LayoutController extends Controller
{
    public function index() {

        return view('index_layout');
    }

    public function users() {
        $users = User::all();
        return view('users_layout', ['users' => $users]);
    }

    public function posts() {
        $posts = Post::all();
        return view('posts_layout', ['posts' => $posts]);
    }

    public function comments() {
        $comments = Comment::all();
        return view('comments_layout', ['comments' => $comments]);
    }
}
