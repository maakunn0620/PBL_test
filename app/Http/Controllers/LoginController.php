<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_data;

class LoginController extends Controller
{
    public function loginview(){
        return view("login");
    }
    public function login(Request $request){
        $user_id = $request->input("user_id");
        $password = $request->input("password");
        $user_data  = new User_data;
        $results  = $user_data->search();
        foreach($results as $result){
            if($user_id == $result->user_id and $password == $result->password){
                return view("manegement_top");
            }else{
                return redirect('login')->with('flash_message','失敗しました。');
            }
        }
    }
}
