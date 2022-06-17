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
}

