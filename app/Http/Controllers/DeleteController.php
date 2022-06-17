<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    #レコードの削除
    public function destroy($id)
    {
    #削除処理
    $greeting = Greeting::findOrFail($id);
    $greeting->delete();
    
    #greetingsテーブルのレコードを全件取得
    $data = Greeting::all();
    return view('all')->with('message', '削除しました。')->with('data',$data);
    }
}
