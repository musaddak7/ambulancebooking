<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospitallist;
use App\Models\addhospital;
use Session;

class HospitalController extends Controller
{
    function hospital(){
        $data=hospitallist::all();
        return view('hospitallist',['hospital'=>$data]);
    
    }
    function addhospital(Request $req){
        if($req->session()->has('user')){
            $addhospital=new addhospital;
            $addhospital->userid=$req->session()->get('user')['id'];
            $addhospital->hospitalid=$req->hospitalid;
            $addhospital->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    static function hbookinglist(){
   
        $userId=Session::get('user')['id'];
        return addhospital::where('userid',$userId)->count();



    }
}
