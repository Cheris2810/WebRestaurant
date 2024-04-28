<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function addcate (){
        return view('pages.admin.categoryproduct.addcategory');
    }
    public function allcate (){

        $allcate = DB::table('thucdon')->get();
        $managecategory = view('pages.admin.categoryproduct.allcategory')->with('allcate',$allcate);
        return view('pages.admin.categoryproduct.addcategory')->with('pages.admin.categoryproduct.allcategory',$managecategory);
    }
    public function savecategory(Request $request){
        $data = array();
        $data['tentd'] = $request->categoryproductname;
        $data['mota'] = $request->categoryproductdesc;
        $data['hienthi'] = $request->categorytinhtrang;

        DB::table('thucdon')->insert($data);
        Session::put('message','Thêm danh mục thực đơn thành công!');
        return Redirect::to('addcate');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    }

    public function unactivecategory($categoryid){
        DB::table('thucdon')->Where('id',$categoryid)->update(['hienthi'=>1]);
        Session::put('message','Không kích hoạt danh mục thực đơn thành công!');
        return Redirect::to('allcate');
    }
    public function activecategory($categoryid){
        DB::table('thucdon')->Where('id',$categoryid)->update(['hienthi'=>0]);
        Session::put('message','Kích hoạt danh mục thực đơn thành công!');
        return Redirect::to('allcate');
    }
}
