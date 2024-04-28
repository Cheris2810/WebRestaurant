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
        DB::table('monan')->Where('id',$productid)->update(['hienthi'=>1]);
        Session::put('message','Không kích hoạt món ăn thành công!');
        return Redirect::to('Allproduct');
    }
    public function activecproduct($productid){
        DB::table('monan')->Where('id',$productid)->update(['hienthi'=>0]);
        Session::put('message','Kích hoạt món ăn thành công!');
        return Redirect::to('Allproduct');
    }

    // //Hiển thị loại thực đơn
    // public function monkhaivi($categoryproductid){
    //     DB::table('monan')->Where('idtd',$categoryproductid)->update(['hienthi'=>2]);
    //     Session::put('message','Món khai vị!');
    //     return Redirect::to('Allproduct');
    // }
    // public function monchinh($categoryproductid){
    //     DB::table('monan')->Where('idtd',$categoryproductid)->update(['hienthi'=>3]);
    //     Session::put('message','Món chính!');
    //     return Redirect::to('Allproduct');
    // }
    //  public function montrangmieng($categoryproductid){
    //     DB::table('monan')->Where('idtd',$categoryproductid)->update(['hienthi'=>4]);
    //     Session::put('message','Món tráng miệng!');
    //     return Redirect::to('Allproduct');
    // }
    // public function douong($categoryproductid){
    //     DB::table('monan')->Where('idtd',$categoryproductid)->update(['hienthi'=>5]);
    //     Session::put('message','Đồ uống!');
    //     return Redirect::to('Allproduct');
    // }
      
      
}