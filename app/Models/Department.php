<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    public function search(){
        $job_no = DB::select("select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name from job_vacacies A inner join department B ON A.job_no = B.job_no inner join department_master C ON C.job_department = B.job_department group by B.job_no;");
        return $job_no;
    }
    public function insert(array $department){
        DB::insert("insert into department (job_no, job_department)
                    values (:job_no,:job_department)", $department);
    }
}
