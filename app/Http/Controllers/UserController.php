<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username and password is Not Matched";
        }
        else{
            $req->session()->put('user',!$user);
            return redirect('/');
        } 
    }
}
