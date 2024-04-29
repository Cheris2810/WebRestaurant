<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class CreateOrderController extends Controller
{
    public function addcreate(){
        return view('pages.admin.Create.addCreate');
    }
    public function allcreate(){

        $allcreate = DB::table('phieudattiec')->get();
        $managerOrder = view('pages.admin.Create.allCreate')->with('allcreate',$allcreate);
             return view('pages.admin.Create.addCreate')->with('pages.admin.Create.allCreate',$managerOrder);
    }

    public function savecreate(Request $request){
        $data = array();
        $data['tenkhach'] = $request->createtenkhach;
        $data['sodienthoai'] = $request->createdienthoai;
        $data['ngaydienra'] = $request->createngay;
        $data['giodienra'] = $request->creategio;
        $data['idnv'] = $request->createtidnv;
        $data['idtd'] = $request->createidtd;
        $data['iddc'] = $request->createiddc;
        $data['phuongthucthanhtoan'] = $request->createphuongthuc;
        $data['view'] = $request->createview;

        DB::table('phieudattiec')->insert($data);
        Session::put('message','Lập phiếu thành công thành công!');
             return Redirect::to('addcreate');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';  
    }
}
