<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

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
        return view('list',compact('job_no'));
    }
}
