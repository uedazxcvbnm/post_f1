<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodobookController extends Controller
{
    //Todobook::all()と、昔はその形式で書いていたが、昇順に並べ替えができるようにするためにorderbyに変えた
    public function index() {
        return \App\Models\Todobook::orderBy('book_priority','asc')->orderBy('id','asc')->get(); 
    }
    //本のグループ番号の
    public function index2(){
        return \App\Models\Todobook::orderBy('book_priority','asc')->groupBy('book_priority')->get('book_priority');
    }
}
