<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //Sử dụng database
use Illuminate\Support\Facades\Session;
use App\Http\Requets;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Result;
use App\Http\Results;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function addStaff (){
        return view('pages.admin.staff.addstaff');
    }
    public function allStaff (){

        $allStaff = DB::table('nhanvien')->get();
        $managerStaff = view('pages.admin.staff.allstaff')->with('allStaff',$allStaff);
        return view('pages.admin.staff.addstaff')->with('pages.admin.staff.allstaff',$managerStaff);
    }
    public function saveStaff(Request $request){
        $data = array();
        $data['tennhanvien'] = $request->staffname;
        $data['ngaysinh'] = $request->staffbirth;
        $data['gioitinh'] = $request->staffgioitinh;
        $data['idbp'] = $request->staffdepartment;
        $data['cccd'] = $request->staffcccd;
        $data['view'] = $request->departmentview;

        DB::table('nhanvien')->insert($data);
        Session::put('message','Thêm nhân viên thành công!');
        return Redirect::to('addStaff');
        // echo '<pre>';
        // print_r($data);
    }
    public function unactiveStaff ($staffid){
        DB::table('nhanvien')->Where('id',$staffid)->update(['view'=>1]);
        Session::put('message','Không kích hoạt nhân viên thành công!');
        return Redirect::to('allStaff');
    }
    public function activeStaff($staffid){
        DB::table('nhanvien')->Where('id',$staffid)->update(['view'=>0]);
        Session::put('message','Kích hoạt nhân viên thành công!');
        return Redirect::to('allStaff');
    }
    public function deleteStaff($staffid){
        DB::table('nhanvien')->where('id',$staffid)->delete();
        Session::put('message','Xóa nhân viên thành công!');
        return Redirect::to('allStaff');
    }
}
