<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;

class Menu1Controller extends Controller
{
     public function menu1(){
        $allproduct = DB::table('monan')->where('view','0')->orderby('id','desc')->limit(1)->get();

        return view('pages.menu.menu1')->with('allproduct',$allproduct);
    }
}

