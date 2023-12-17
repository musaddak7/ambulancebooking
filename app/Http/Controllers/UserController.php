<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    function getData(){
        return User::all();
    }
   
    function login(Request $req){
        $user=user::where(['username'=>$req->username])->first();
        if (!$user||!Hash::check($req->password,$user->password))
        {

            return "user and password not mached";
        }else{
            $req->session()->put('user',$user);

           return redirect('/');
        }
       
    }
    function userregister(Request $req){
       // return $req->input();
       $req->validate([
        'firstname'=>'required',
        'password'=>'required'
       ]);
        $user = new User;
        $user->firstname = $req->firstname;
        $user->lastname  = $req->lastname;
        $user->username  = $req->username;
        $user->password  = Hash :: make($req->password);
        $user->save();
        return redirect('/userlogin');
    }
  


}
