<?php

namespace app\Http\Controllers;

use app\Http\Controllers;
use Illuminate\Http\Request;

class ComedianController extends Controllers
{
    //
    public function index() {

        return \app\Models\Comedian::all();  // ←自動でjsonにしてくれます

    }
}
