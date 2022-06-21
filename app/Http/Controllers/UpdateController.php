<?php

namespace App\Http\Controllers;

use App\Models\Job_vacansies;
use App\Models\Department;
use App\Models\Job_area;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //初回接続
    public function index() {
        $Job_vacansies = new Job_vacansies();
        $initial_lists = $Job_vacansies->m_list();
        return view('update_form', compact('initial_lists'));
    }

    //押したボタンのIDをinitial_searchに送り、返り値をviewへ戻す
    public function edit_page(string $page_iid){
            $sp_company = $this->initial_search($page_iid);
            return view('update_form',compact("sp_company"));
    }

    //編集ボタンを押した求人票と同じIDのものを持ってくる
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
        $initial_lists  = $job_vacansies->DB_search($param);
        return view('update_form',compact('initial_lists'));
    }

    //変更内容を適応する
    public function edit_update(Request $request){
        //job_vacanciesテーブルの更新内容を配列へ
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
        //初期化用job_noの作成
        $init_no = $request->input("job_no");
        //modelオブジェクトの作成
        $Job_vacansies = new Job_vacansies;
        $departmentDB = new Department;
        $jobareaDB = new job_area;

        //job_vacanciesテーブルを更新する
        $Job_vacansies->DB_update($jobvacancies);

        //departmentテーブルの更新内容を代入
        $arraydepartments = $request->input("department");
        //一度更新対象を全て削除
        $departmentDB->init_update_d($init_no);
        foreach($arraydepartments as $departments){
            $department = array(
                'job_no' => $request->input("job_no"),
                'job_department' => $departments
            );
            $departmentDB->insert($department);
        }

        //job_areaテーブルの更新内容を代入
        $arrayjobarea =$request->input("prefecture");
        //一度更新対象をすべて削除
        $jobareaDB->init_update_a($init_no);
        foreach($arrayjobarea as $jobareas){
            $jobarea = array(
                'job_no' => $request->input("job_no"),
                'area_no' => $jobareas
            );
            $jobareaDB->insert($jobarea);
        }
        return redirect("/edit");
    }
}
