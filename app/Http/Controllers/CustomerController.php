<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addCustomer(){
        return view('pages.user.customer.addcustomer');
    }
    public function allCustomer(){

        $allCustomer = DB::table('userlogin')->get();
        $managerOrder = view('pages.user.customer.allcustomer')->with('allCustomer',$allCustomer);
             return view('pages.user.customer.addcustomer')->with('pages.user.customer.allcustomer',$managerOrder);
    }
     public function savecreate(Request $request){
        $data = array();
        $data['name_user'] = $request->customername;
        $data['email_user'] = $request->customeremail;
        // $data['sdt_user'] = $request->customersdt;
        $data['password_user'] = $request->customerpass;

        DB::table('userlogin')->insert($data);
        Session::put('message','Tạo tài khoản thành công!');
             return Redirect::to('addCustomer');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';  
    }
}
