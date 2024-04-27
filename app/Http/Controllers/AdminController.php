<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
session_start();

class AdminController extends Controller
{
    public function homeadmin(Request $request){
              $admin_email = $request->email_admin;
              $admin_password = md5($request->password_admin);
                                                 
              $result = DB::table('adminlogin')->where('email_admin',$admin_email)->where('password_admin',$admin_password);
              if($result){
                     // Session::put('name_admin',$result->name_admin);
                     // Session::put('id_admin',$result->id_admin);
                     return view('pages.admin.homeadmin');
              }else{
                     Session::put('message','Email hoặc mật khẩu nhập sai!');
                     return view('pages.admin.loginadmin');
              }
       }
       public function log_out(){
             return view('pages.admin.loginadmin');
       }
}
