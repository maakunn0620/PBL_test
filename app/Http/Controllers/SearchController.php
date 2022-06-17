
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function showall()
    {
        $Department = new Department;
        $job_no  = $Department->search();
        return view('list',compact('job_no'));
    }

    /*public function search(){
        $job_no = DB::select("select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name from job_vacacies A inner join department B ON A.job_no = B.job_no inner join department_master C ON C.job_department = B.job_department group by B.job_no;");
        return view('search.search',compact('job_no'));
    }*/
}
