<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userRegister(Request $req){

        $req->validate([
            'username' => "required|unique:users",
            'fullname' => "required",
            'email' => "required|unique:users|email",
            'password' => 'required|confirmed'
        ]);
        $user = new Users();
        $user->username = $req->username;
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $result = $user->save();
        if($result){
            return back()->with("success","You have been registered Successfully");
        }else{
            return back()->with("fail","Something went wrong");
        }

    }

    public function login(Request $req){
        $req->validate([
            "email" => "required|email",
            "password" =>"required"
           ]);
        $user = Users::where("email","=",$req->email)->first();
        if($user){
            if(Hash::check($req->password,$user->password)){
                $req->session()->put("username",$user->username);
                $req->session()->put("userid",$user->id);
                return redirect()->route("home");
            }else{
                return back()->with("fail","Password Incorrect! Please enter the correct password");
            }
        }
        else{
            return back()->with("fail","Email address not registered");
        }
    }

    public function logout(){
        if(Session()->has("username")){
            Session()->pull("username");
            return redirect()->route("login");
        }
    }
}
