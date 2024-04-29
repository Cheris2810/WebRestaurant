<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function addDepartment (){
        return view('pages.admin.department.addDepartment');
    }
    public function allDepartment (){

        $allDepartment = DB::table('bophan')->get();
        $managerDepartment = view('pages.admin.department.allDepartment')->with('allDepartment',$allDepartment);
        return view('pages.admin.department.addDepartment')->with('pages.admin.department.allDepartment',$managerDepartment);
    }
    public function saveDepartment(Request $request){
        $data = array();
        $data['tenbophan'] = $request->departmentname;
        $data['heso'] = $request->departmentheso;
        $data['view'] = $request->departmenthienthi;

        DB::table('bophan')->insert($data);
        Session::put('message','Thêm bộ phận thành công!');
        return Redirect::to('addDepartment');
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    }
    public function unactiveDepartment($departmentid){
        DB::table('bophan')->Where('id',$departmentid)->update(['view'=>1]);
        Session::put('message','Không kích hoạt bộ phận thành công!');
        return Redirect::to('allDepartment');
    }
    public function activeDepartment($departmentid){
        DB::table('bophan')->Where('id',$departmentid)->update(['view'=>0]);
        Session::put('message','Kích hoạt bộ phận thành công!');
        return Redirect::to('allDepartment');
    }
}
