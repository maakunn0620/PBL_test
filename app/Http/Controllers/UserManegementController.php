<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManegementController extends Controller
{
    public function manegement_top () {
        return view('manegement_top');
    }
}
