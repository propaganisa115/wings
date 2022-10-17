<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Login;


class LoginController extends Controller
{
    
    public function actionlogin(Request $request)
    {
        
        $input_user= $request->input('user');
        $input_password= $request->input('password');
        $user=Login::where("user",$input_user)->where("password",$input_password)->get();

        if ($user->isEmpty()) {
            return view("welcome", ["error"=>"password or username was wrong"]);
        }else{
            return view('home');

        }
    }

    
}