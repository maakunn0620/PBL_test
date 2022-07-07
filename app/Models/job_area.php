<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job_area extends Model
{
    public function insert(array $jobarea){
        DB::insert("insert into job_area (job_no, area_no)
                    values (:job_no,:area_no)", $jobarea);
    }
    public function init_update_a(string $init_no){
        DB::delete("DELETE FROM job_area WHERE job_no = ".$init_no);
    }
    public function jobarea_delete(string $id) {
        DB::delete("DELETE FROM job_area where job_no =".$id);
    }
}
