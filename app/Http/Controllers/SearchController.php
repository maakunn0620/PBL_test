<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Job_vacansies;

class SearchController extends Controller
{
    public function showall(){
        $Department = new Department;
        $job_no  = $Department->search();
        return view('list',compact('job_no'));
    }
    public function showsearch(){
        return view('search');
    }

    public function search(Request $request){
        $jobsearch = array(
            'area_no' => $request->input("area_no"),
            'department_no' => $request->input("industry"),
            'jobs' => $request->input("jobtype")
        );
        $Department = new Department;
        $job_no = $Department->detailsearch($jobsearch);
        if(empty($job_no)){
            return redirect('search')->with('flash_message','見つかりませんでした。');
        }
        return view('list',compact('job_no'));
    }
    //もっと見る選択時、データを引っ張ってくる
    public function showpopup(string $id){
        $job_vacansies = new job_vacansies();
        $job_detail  = $job_vacansies->motto_search($id);
        return view('list',compact('job_detail'))->with('flash_message', 'もっと');
    }
}
