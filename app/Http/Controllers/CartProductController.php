<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;

class CartProductController extends Controller
{
    public function savecart(Request $request){
        // $productId = $request->productid_hidden;
        // $quantity = $request->qty;

        // $data = DB::table('monan')->where('id',$productId)->get();
        $allproduct = DB::table('monan')->get();
        $data['tenma'] = $request->productname;

        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('Cart.showCart');
    }
}
