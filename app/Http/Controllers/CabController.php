<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cablist;
use DB;

class CabController extends Controller
{




    function show(){


        $data=DB::table('cablists')
        ->join('categorylists','cablists.category_id',"=",'categorylists.id')
        
        ->get();
        return view('cab_available',compact('data'));
    }
    // function show(){

    //     $data=cablist::all();

    //     return view('cab_available',['cablists'=>$data]);
    // }
}
