<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    public function search(){
        $job_no = DB::select("select No, company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name from job_vacacies A inner join department B ON A.job_no = B.job_no inner join department_master C ON C.job_department = B.job_department group by B.job_no;");
        return $job_no;
    }

    public function detailsearch(array $jobsearch){
        //条件　勤務地のみ
        if($jobsearch['area_no'] != null and $jobsearch['jobs'] == null and $jobsearch['department_no'] == "null"){
            $keyword = $jobsearch['area_no'];
            $detailjob = DB::select("select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                     from job_vacacies A
                                     inner join department B ON A.job_no = B.job_no
                                     inner join department_master C ON C.job_department = B.job_department
                                     inner join job_area D on A.job_no = D.job_no
                                     inner join area E on D.area_no = E.area_no
                                     WHERE E.area_no = '".$keyword."' group by B.job_no;");
            return $detailjob;
        }

        //条件　学科のみ
        if($jobsearch['area_no'] == null and $jobsearch['jobs'] == null and $jobsearch['department_no'] != "null"){
            $keyword = $jobsearch['department_no'];
            $detailjob = DB::select("select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                     from job_vacacies A
                                     inner join department B ON A.job_no = B.job_no
                                     inner join department_master C ON C.job_department = B.job_department
                                     inner join job_area D on A.job_no = D.job_no
                                     inner join area E on D.area_no = E.area_no
                                     WHERE b.job_department = '".$keyword ."'group by B.job_no;");
            return $detailjob;
        }

        //条件　職種のみ
        if($jobsearch['area_no'] == null and $jobsearch['jobs'] != null and $jobsearch['department_no'] == "null"){
            $keyword = $jobsearch['jobs'];
            $sql = "select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                     from job_vacacies A
                                     inner join department B ON A.job_no = B.job_no
                                     inner join department_master C ON C.job_department = B.job_department
                                     inner join job_area D on A.job_no = D.job_no
                                     inner join area E on D.area_no = E.area_no
                                     WHERE jobs LIKE '%". $keyword ."%' group by B.job_no;";
            $detailjob = DB::select($sql);
            return $detailjob;
        }

            //条件　勤務地と学科
            if($jobsearch['area_no'] != null and $jobsearch['jobs'] == null and $jobsearch['department_no'] != "null"){
                $area_no = $jobsearch['area_no'];
                $department_no = $jobsearch['department_no'];
                $sql = "select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                         from job_vacacies A
                                         inner join department B ON A.job_no = B.job_no
                                         inner join department_master C ON C.job_department = B.job_department
                                         inner join job_area D on A.job_no = D.job_no
                                         inner join area E on D.area_no = E.area_no
                                         WHERE b.job_department ='".$department_no."' and E.area_no = '".$area_no."' group by B.job_no;";
                $detailjob = DB::select($sql);
                return $detailjob;
            }

            //条件　勤務地と職種
            if($jobsearch['area_no'] != null and $jobsearch['jobs'] != null and $jobsearch['department_no'] == "null"){
                $area_no = $jobsearch['area_no'];
                $jobs = $jobsearch['jobs'];
                $sql = "select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                         from job_vacacies A
                                         inner join department B ON A.job_no = B.job_no
                                         inner join department_master C ON C.job_department = B.job_department
                                         inner join job_area D on A.job_no = D.job_no
                                         inner join area E on D.area_no = E.area_no
                                         WHERE jobs LIKE '%". $jobs ."%' and E.area_no = '".$area_no."' group by B.job_no;";
                $detailjob = DB::select($sql);
                return $detailjob;
            }

            //条件　学科と職種
            if($jobsearch['area_no'] == null and $jobsearch['jobs'] != null and $jobsearch['department_no'] != "null"){
                $department_no = $jobsearch['department_no'];
                $jobs = $jobsearch['jobs'];
                $sql = "select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                            from job_vacacies A
                                            inner join department B ON A.job_no = B.job_no
                                            inner join department_master C ON C.job_department = B.job_department
                                            inner join job_area D on A.job_no = D.job_no
                                            inner join area E on D.area_no = E.area_no
                                            WHERE jobs LIKE '%". $jobs ."%' and b.job_department ='".$department_no."' group by B.job_no;";
                $detailjob = DB::select($sql);
                return $detailjob;
            }

            //条件　学科と職種と勤務地
            if($jobsearch['area_no'] != null and $jobsearch['jobs'] != null and $jobsearch['department_no'] != "null"){
                $department_no = $jobsearch['department_no'];
                $jobs = $jobsearch['jobs'];
                $area_no = $jobsearch['area_no'];
                $sql = "select company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                            from job_vacacies A
                                            inner join department B ON A.job_no = B.job_no
                                            inner join department_master C ON C.job_department = B.job_department
                                            inner join job_area D on A.job_no = D.job_no
                                            inner join area E on D.area_no = E.area_no
                                            WHERE E.area_no = '".$area_no."'and jobs LIKE '%". $jobs ."%' and b.job_department ='".$department_no."' group by B.job_no;";
                $detailjob = DB::select($sql);
                return $detailjob;
            }

             //条件　学科と職種と勤務地
            if($jobsearch['area_no'] == null and $jobsearch['jobs'] == null and $jobsearch['department_no'] == "null"){
                $department_no = $jobsearch['department_no'];
                $jobs = $jobsearch['jobs'];
                $area_no = $jobsearch['area_no'];
                $sql = "select No, company, jobs, address, GROUP_CONCAT(distinct department_name) as department_name
                                            from job_vacacies A
                                            inner join department B ON A.job_no = B.job_no
                                            inner join department_master C ON C.job_department = B.job_department
                                            group by B.job_no;";
                $detailjob = DB::select($sql);
                return $detailjob;
            }
    }

    public function insert(array $department){
        DB::insert("insert into department (job_no, job_department)
                    values (:job_no,:job_department)", $department);
    }
    //更新時削除
    public function init_update_d(string $init_no){
        DB::delete("DELETE FROM department WHERE job_no = ".$init_no);
    }

    //ただの削除
    public function department_delete(string $id) {
        DB::delete("DELETE FROM department where job_no =".$id);
    }
}
