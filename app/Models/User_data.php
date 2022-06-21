<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User_data extends Model
{
    public function search(){
        $sql = DB::select("SELECT user_id , password FROM `user_data`");
        return $sql;
    }
}