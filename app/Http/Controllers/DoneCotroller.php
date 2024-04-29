<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class DoneCotroller extends Controller
{
    public function addDone(){
        return view('pages.admin.order.addOrder');
    }
    public function allDone(){

        $allDone = DB::table('dathang')->get();
        $managerOrder = view('pages.admin.order.allOrder')->with('allDone',$allDone);
             return view('pages.admin.order.addOrder')->with('pages.admin.order.allOrder',$managerOrder);
    }
    public function saveOrder(Request $request){
        $data = array();
        $data['tenmonan'] = $request->ordertname;
        $data['gia'] = $request->ordergia;
        $data['soluong'] = $request->ordersoluong;
        $data['tongtien'] = $request->ordertongtien;
        $data['view'] = $request->orderview;

        DB::table('dathang')->insert($data);
        Session::put('message','Thêm đơn hàng thành công!');
             return Redirect::to('addDone');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';  
    }
}
