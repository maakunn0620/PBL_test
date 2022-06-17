<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job_vacansies extends Model
{
    public function insert(array $vacansies){
        DB::insert('insert into job_vacacies (job_no, company, pdf, cment, address, jobs, company_url)
        values(:job_no, :company, :pdf, :comment, :address, :jobs, :company_url)', $vacansies);
    }
}
