<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
   public function login(){
             return view('pages.user.registeruser');
       }
}
