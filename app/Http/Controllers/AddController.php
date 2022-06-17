<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_vacansies;

class AddController extends Controller
{
    public function form(){
        return view("adding_form");
    }
    public function add (Request $request){
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
        return redirect('/');
    }
}
