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
}
