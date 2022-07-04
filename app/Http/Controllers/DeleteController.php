<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job_vacansies;
use App\Models\Department;
use App\Models\Job_area;

class DeleteController extends Controller
{
    #レコードの削除
    public function destroy(string $id)
    {
        #削除処理
        $Job_vacansies = new Job_vacansies;
        $departmentDB = new Department;
        $jobareaDB = new job_area;

        $departmentDB->department_delete($id);
        $jobareaDB->jobarea_delete($id);
        $Job_vacansies->vacansies_delete($id);

        return redirect('/edit')->with('delete_message', '削除');
    }
}
