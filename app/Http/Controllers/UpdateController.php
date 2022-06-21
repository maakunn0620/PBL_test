<?php

namespace App\Http\Controllers;

use App\Models\Job_vacansies;
use App\Models\Department;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //初回接続
    public function index() {
        $Department = new Department;
        $initial_lists = $Department->search();
        return view('update_form', compact('initial_lists'));
    }
    //updateかdeleteかの判定
    public function editor_decision(Request $request){
        if ($request->has("update")){
            $sp_company = $this->initial_search($request->id);
            return view('update_form',compact("sp_company"));
        }elseif ($request->has("delete")){
            dd("デリーと");
        }
    }
    //編集画面から編集ボタンを押した際の初回表示
    public function initial_search(string $id)
    {
        $job_vacansies = new Job_vacansies();
        $sp_company  = $job_vacansies->initial_search($id);
        return $sp_company;
    }

    //update_formからの入力企業名を元に情報を引っ張ってくる
    public function edit_search(Request $request){
        $param = ['company_name' => $request->company_name];
        $job_vacansies = new Job_vacansies();
        $sp_company  = $job_vacansies->DB_search($param);
        return view('update_form',compact('sp_company'));
    }

    //変更内容を適応する
    public function edit_update(Request $request){
        $jobvacancies = array(
            'id' => $request->input("id"),
            'job_no' => $request->input("job_no"),
            'company' => $request->input("company"),
            'pdf' => $request->input("pdf"),
            'comment' => $request->input("comment"),
            'address' => $request->input("address"),
            'jobs' => $request->input("jobs"),
            'company_url' => $request->input("company_url")
        );
        $Job_vacansies = new Job_vacansies;
        $Job_vacansies->DB_update($jobvacancies);
    }
}
