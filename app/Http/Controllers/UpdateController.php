<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //初回接続
    public function index() {
        return view('update_form', ['update_sub']);
    }

    //update_formからの入力企業名を元に情報を引っ張ってくる
    public function Update_Search(Request $request){

    }
}
