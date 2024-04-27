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

        $allcate = DB::table('danhmucsp')->get();
        $managecategory = view('pages.admin.categoryproduct.allcategory')->with('allcate',$allcate);
        return view('pages.admin.categoryproduct.addcategory')->with('pages.admin.categoryproduct.allcategory',$managecategory);
    }
    public function savecategory(Request $request){
        $data = array();
        $data['tendanhmuc'] = $request->categoryproductname;
        $data['mota'] = $request->categoryproductdesc;
        $data['tinhtrang'] = $request->categorytinhtrang;

        DB::table('danhmucsp')->insert($data);
        Session::put('message','Thêm dữ liệu thành công!');
        return Redirect::to('addcate');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    }

    public function unactivecategory($categoryid){
        DB::table('danhmucsp')->Where('id',$categoryid)->update(['tinhtrang'=>1]);
        Session::put('message','Không kích hoạt danh mục sản phẩm thành công!');
        return Redirect::to('allcate');
    }
    public function activecategory($categoryid){
        DB::table('danhmucsp')->Where('id',$categoryid)->update(['tinhtrang'=>0]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công!');
        return Redirect::to('allcate');
    }
}
