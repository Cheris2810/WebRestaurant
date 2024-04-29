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

class UserController extends Controller
{
    public function homeuser(Request $request){
              $user_email = $request->email_user;
              $user_password = $request->password_user;
                                                 
              $result = DB::table('userlogin')->where('email_user',$user_email)->where('password_user',$user_password);
              if($result){
                      // Session::put('email_user',$result->email_user);
                      // Session::put('password_user',$result->password_user);
                     return view('welcome');
              }else{
                     Session::put('message','Email hoặc mật khẩu nhập sai!');
                     return view('pages.user.loginuser');
              }
       }
       public function logout(){
             return view('pages.user.loginuser');
       }

   

}
