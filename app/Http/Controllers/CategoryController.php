<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\categorylist;

class CategoryController extends Controller
{
    function search(Request $req)
    {
        $searchtext=$_GET['query'];
        $ambocat=categorylist::where('ambocat','like','%'.$searchtext.'%')
        ->get();
        return view('searchcat',compact('ambocat'));

    }

    function form(){
        return view('bookingambulance');
    }
}
