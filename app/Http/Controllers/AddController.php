<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_vacansies;
use App\Models\Department;
use App\Models\job_area;
use App\Http\Requests\KyujinValidate;

class AddController extends Controller
{
    public function form(){
        $Job_vacansies = new Job_vacansies;
        $getno = $Job_vacansies->getId();
        return view("adding_form",compact('getno'));
    }
    public function add (KyujinValidate $request){
        //job_vacanciesへの追加
        $jobvacancies = array(
            'job_no' => $request->input("job_no"),
            'company' => $request->input("company"),
            'pdf' => $request->input("pdf"),
            'comment' => $request->input("comment"),
            'address' => $request->input("address"),
            'jobs' => $request->input("jobs"),
            'company_url' => $request->input("company_url")
        );
        $Job_vacansies = new Job_vacansies;
        $Job_vacansies->insert($jobvacancies);
        //departmentへの追加
        $arraydepartments = $request->input("department");
        foreach($arraydepartments as $departments){
            $department = array(
                'job_no' => $request->input("job_no"),
                'job_department' => $departments
            );
            $departmentDB = new Department;
            $departmentDB->insert($department);
        }
        //job_areaへの追加
        $arrayjobarea =$request->input("prefecture");
        foreach($arrayjobarea as $jobareas){
            $jobarea = array(
                'job_no' => $request->input("job_no"),
                'area_no' => $jobareas
            );
            $jobareaDB = new job_area;
            $jobareaDB->insert($jobarea);
        }
        return redirect('/top')->with('adding_message', '追加完了');
    }
}
