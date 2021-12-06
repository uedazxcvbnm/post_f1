<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComedianController2 extends Controller //ComedianControllerからComedianController2に名前を変えた
{
    //
    public function index() {

        return \App\Models\Comedian::all();  // ←自動でjsonにしてくれます

    }
    //create
    /*public function create(ItemRequest $request) {
        $name = $request->input('name');
        //$content = $request->input('content');
        //$price = $request->input('price');
        //$quantity = $request->input('quantity');
        Item::create(compact('name', 'content', 'price', 'quantity'));
        set_message('商品を追加しました。');
        return redirect(route('item.index'));
    }*/
}
