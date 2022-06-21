<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Job_vacansies extends Model
{
    public function insert(array $vacansies){
        DB::insert('insert into job_vacacies (job_no, company, pdf, cment, address, jobs, company_url)
        values(:job_no, :company, :pdf, :comment, :address, :jobs, :company_url)', $vacansies);
    }
  
    //更新管理画面の初期一覧表示
    public function m_list(){
        $list = DB::select("select No, company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name from job_vacacies A inner join department B ON A.job_no = B.job_no inner join department_master C ON C.job_department = B.job_department group by B.job_no;");
        return $list;
    }
    //更新ボタンを押した際の初期表示
    public function initial_search(string $id){
        $initial_record = DB::select("select No, A.job_no, company, jobs, GROUP_CONCAT(distinct area_no) as area_no, GROUP_CONCAT(distinct department_name) as department_name, B.job_department,pdf, address, company_url, cment
        from job_vacacies A
        inner join department B ON A.job_no = B.job_no
        inner join department_master C ON C.job_department = B.job_department
        inner join job_area D on A.job_no = D.job_no
        group by B.job_no
        HAVING No = ".$id.";");
        return $initial_record;
    }
    //
    public function DB_search(array $param){
        $update_sub = DB::select("select No, company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
        from job_vacacies A
        inner join department B ON A.job_no = B.job_no
        inner join department_master C ON C.job_department = B.job_department
        group by B.job_no
        having company = :company_name;", $param);
        return $update_sub;
    }
    public function DB_update(array $param){
        DB::update("UPDATE job_vacacies
        SET job_no = :job_no, company = :company, pdf = :pdf, cment = :comment, address = :address, jobs = :jobs, company_url = :company_url
        WHERE No = :id", $param);

    public function getId(){
       $getno = DB::select("SELECT MIN(job_no + 1) AS job_no
       FROM job_vacacies
       WHERE (job_no + 1) NOT IN (SELECT job_no FROM job_vacacies) ");
       return $getno;
    }
}
