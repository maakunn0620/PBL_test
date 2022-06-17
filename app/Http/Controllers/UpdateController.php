<?php

namespace App\Http\Controllers;

use App\Models\Job_vacansies;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //初回接続
    public function index() {
        return view('update_form', ['sp_company']);
    }

    //update_formからの入力企業名を元に情報を引っ張ってくる
    public function edit_search(Request $request){
        $param = ['company_name' => $request->company_name];
        $job_vacansies = new Job_vacansies();
        $sp_company  = $job_vacansies->DB_search($param);
        return view('update_form',compact('sp_company'));
    }
}
