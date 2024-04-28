<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
     public function addIngredient(){
        return view('pages.admin.ingredient.Addingredient');
    }
    public function allIngredient(){

        $allIngredient = DB::table('nguyenlieu')->get();
        $managerIngredient = view('pages.admin.ingredient.Allingredient')->with('allIngredient',$allIngredient);
        return view('pages.admin.ingredient.Addingredient')->with('pages.admin.ingredient.Allingredient',$managerIngredient);
    }
    public function saveIngredient(Request $request){
        $data = array();
        $data['tennguyenlieu'] = $request->ingredientname;
        $data['soluong'] = $request->ingredientnumber;
        $data['idma'] = $request->ingredientproduct;
        $data['view'] = $request->ingredienthienthi;

        DB::table('nguyenlieu')->insert($data);
        Session::put('message','Thêm nguyên liệu thành công!');
        return Redirect::to('addIngredient');
    }

    //Hiển thị hoặc ẩn nguyên liệu
    public function unactiveIngredient($Ingredientid){
        DB::table('nguyenlieu')->Where('id',$Ingredientid)->update(['hienthi'=>1]);
        Session::put('message','Không kích hoạt nguyên liệu thành công!');
        return Redirect::to('allIngredient');
    }
    public function activeIngredient($Ingredientid){
        DB::table('nguyenlieu')->Where('id',$Ingredientid)->update(['hienthi'=>0]);
        Session::put('message','Kích hoạt nguyên liệu thành công!');
        return Redirect::to('allIngredient');
    }
}
