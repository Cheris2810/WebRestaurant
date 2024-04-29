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
        DB::table('nguyenlieu')->Where('id',$Ingredientid)->update(['view'=>1]);
        Session::put('message','Không kích hoạt nguyên liệu thành công!');
            return Redirect::to('allIngredient');
    }
    public function activeIngredient($Ingredientid){
        DB::table('nguyenlieu')->Where('id',$Ingredientid)->update(['view'=>0]);
        Session::put('message','Kích hoạt nguyên liệu thành công!');
            return Redirect::to('allIngredient');
    }

    //Xóa dữ liệu
    // public function deleteIngredient($Ingredientid){
    //      DB::table('nguyenlieu')->where('id',$Ingredienti)->update($data);
    //      Session::put('message','Cập nhật nguyên liệu thành công!');
    //         return Redirect::to('allIngredient');
    // }

    public function editIngredient ($Ingredientid){
        $editIngredient = DB::table('nguyenlieu')->where('id',$Ingredientid)->get();
         $managerIngredient = view('pages.admin.ingredient.Editingredient')->with('editIngredient',$editIngredient);
            return view('pages.admin.ingredient.Editingredient')->with('pages.admin.ingredient.Editingredient',$managerIngredient);
    }
    public function updateIngredient (Request $request,$Ingredientid){
        $data = array();
        $data['tennguyenlieu'] = $request->ingredientname;
        $data['soluong'] = $request->ingredientnumber;
        $data['idma'] = $request->ingredientproduct;

        DB::table('nguyenlieu')->where('id',$Ingredientid)->update($data);
        Session::put('message','Cập nhật nguyên liệu thành công!');
            return Redirect::to('allIngredient');

    }
}
