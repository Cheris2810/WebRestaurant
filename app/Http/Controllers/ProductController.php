<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Addproduct(){
        return view('pages.admin.product.addProduct');
    }
    public function Allproduct(){

        $Allproduct = DB::table('monan')->get();
        $managerproduct = view('pages.admin.product.allProduct')->with('Allproduct',$Allproduct);
             return view('pages.admin.product.addProduct')->with('pages.admin.product.allProduct',$managerproduct);
    }
    public function saveproduct(Request $request){
        $data = array();
        $data['tenma'] = $request->productname;
        // if($request->has('image')){
        $data['img'] = $request->productimg;
            // $data_name ['img'] = $data['img']->getClientOriginalName();
            // dd($saveproduct);
        // }
        $data['gia'] = $request->productmoney;
        $data['idtd'] = $request->productidthucdon;
        $data['view'] = $request->producthienthi;

        DB::table('monan')->insert($data);
        Session::put('message','Thêm món ăn thành công!');
             return Redirect::to('Addproduct');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';  
    }
    //  Hiển thị hoặc ẩn món ăn  
    public function unactiveproduct($productid){
        DB::table('monan')->Where('id',$productid)->update(['view'=>1]);
        Session::put('message','Không kích hoạt món ăn thành công!');
             return Redirect::to('Allproduct');
    }
    public function activeproduct($productid){
        DB::table('monan')->Where('id',$productid)->update(['view'=>0]);
        Session::put('message','Kích hoạt món ăn thành công!');
             return Redirect::to('Allproduct');
    }
    public function editproduct ($productid){
        $editproduct = DB::table('monan')->where('id',$productid)->get();
         $managerproduct = view('pages.admin.product.editProduct')->with('editproduct',$editproduct);
            return view('pages.admin.product.editProduct')->with('pages.admin.product.editProduct',$managerproduct);
    }
    public function updateproduct (Request $request,$productid){
        $data = array();
        $data['tenma'] = $request->productname;
        $data['img'] = $request->productimg;
        $data['gia'] = $request->productmoney;
        $data['idtd'] = $request->productidthucdon;

        DB::table('monan')->where('id',$productid)->update($data);
        Session::put('message','Cập nhật món ăn thành công!');
            return Redirect::to('Allproduct');

    }
//Xóa món ăn
    public function deleteproduct($productid){
        DB::table('monan')->where('id',$productid)->delete();
        Session::put('message','Xóa món ăn thành công!');
        return Redirect::to('Allproduct');
    }
}
    