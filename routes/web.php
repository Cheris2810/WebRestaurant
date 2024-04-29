<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IngredientController;

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;

use App\Http\Controllers\DoneCotroller;
use App\Http\Controllers\CreateOrderController;

use App\Http\Controllers\Menu1Controller;
use App\Http\Controllers\CartProductController;


Route::get('/home', function(){
    return view('welcome');
});

Route::get('/', function () {
   return view('pages.user.loginuser');
});

Route::get('/menu', function () {
   return view('pages.menu.menutong');
});

// Route::get('/menu-1', function () {
//     return view('pages.menu.menu1');
// });

Route::get('/menu-2', function () {
    return view('pages.menu.menu2');
});

Route::get('/menu-3', function () {
    return view('pages.menu.menu3');
});

Route::get('/menu-4', function () {
    return view('pages.menu.menu4');
});


 Route::get('/login', function () {
   return view('pages.user.registeruser');
});

Route::get('/loginadmin', function(){
    return view('pages.admin.loginadmin');
});

//-----------------------BACKEND--------------------
//----------------------USER----------------
Route::post('/homeuser', [UserController::class, 'homeuser'])->name('homeuser');
Route::get('/logout', [UserController::class, 'pages.admin.loginadmin'])->name('pages.admin.loginadmin');

Route::get('/registerUser', function(){
    return view('pages.user.registeruser');
});

//---------------------ADMIN------------------
Route::get('/homeadmin', [AdminController::class, 'homeadmin'])->name('homeadmin');
Route::get('/loginuser',function(){
    return view('pages.user.loginuser');
});

 //-----------------Register------------
Route::post('/login',[RegisterController::class, 'login'])->name('login');

//--------------CATEGORY PRODUCT-------------

Route::get('/addcate', [CategoryProductController::class, 'addcate'])->name('addcate');
Route::get('/allcate', [CategoryProductController::class, 'allcate'])->name('allcate');
//-----------chỉnh sửa
Route::get('/editcategory/{categoryid}', [CategoryProductController::class, 'editcategory'])->name('editcategory');

Route::get('/unactivecategory/{categoryid}', [CategoryProductController::class, 'unactivecategory'])->name('unactivecategory');
Route::get('/activecategory/{categoryid}', [CategoryProductController::class, 'activecategory'])->name('activecategory');

Route::post('/savecategory', [CategoryProductController::class, 'savecategory'])->name('savecategory');
Route::post('/updatecategory/{categoryid}', [CategoryProductController::class, 'updatecategory'])->name('updatecategory');


//------------PRODUCT---------------

Route::get('Addproduct',[ProductController::class,'Addproduct'])->name('Addproduct');
Route::get('Allproduct',[ProductController::class,'Allproduct'])->name('Allproduct');
//-----------chỉnh sửa
Route::get('/editproduct/{productid}', [ProductController::class, 'editproduct'])->name('editproduct');

//Hiển thị product-------vvvvvvvv
Route::get('/unactiveproduct/{productid}', [ProductController::class, 'unactiveproduct'])->name('unactiveproduct');
Route::get('/activeproduct/{productid}', [ProductController::class, 'activeproduct'])->name('activeproduct');
//Hiển thị product---------^^^^^^

Route::post('/saveproduct', [ProductController::class, 'saveproduct'])->name('saveproduct');
Route::post('/updateproduct/{productid}', [ProductController::class, 'updateproduct'])->name('updateproduct');

//Xóa món ăn
Route::get('/deleteproduct/{productid}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');

//---------------------NGUYÊN LIỆU-------------

Route::get('addIngredient',[IngredientController::class,'addIngredient'])->name('addIngredient');
Route::get('allIngredient',[IngredientController::class,'allIngredient'])->name('allIngredient');
//-----------chỉnh sửa
Route::get('/editIngredient/{Ingredientid}', [IngredientController::class, 'editIngredient'])->name('editIngredient');

//Hiển thị product-------vvvvvvvv
Route::get('/unactiveIngredient/{Ingredientid}', [IngredientController::class, 'unactiveIngredient'])->name('unactiveIngredient');
Route::get('/activeIngredient/{Ingredientid}', [IngredientController::class, 'activeIngredient'])->name('activeIngredient');
//Hiển thị product---------^^^^^^
Route::post('/saveIngredient', [IngredientController::class, 'saveIngredient'])->name('saveIngredient');

//------------xóa
// Route::get('/deleteIngredient/{Ingredientid}', [IngredientController::class, 'deleteIngredient'])->name('deleteIngredient');
Route::post('/updateIngredient/{Ingredientid}', [IngredientController::class, 'updateIngredient'])->name('updateIngredient');

//----------------------BỘ PHẬN----------------------

Route::get('addDepartment',[DepartmentController::class,'addDepartment'])->name('addDepartment');
Route::get('allDepartment',[DepartmentController::class,'allDepartment'])->name('allDepartment');

//Hiển thị bộ phận-------vvvvvvvv
Route::get('/unactiveDepartment/{departmentid}', [DepartmentController::class, 'unactiveDepartment'])->name('unactiveDepartment');
Route::get('/activeDepartment/{departmentid}', [DepartmentController::class, 'activeDepartment'])->name('activeDepartment');
//Hiển thị bộ phận---------^^^^^^

Route::post('/saveDepartment', [DepartmentController::class, 'saveDepartment'])->name('saveDepartment');


//-------------------------NHÂN VIÊN---------------------

Route::get('/addStaff', [StaffController::class, 'addStaff'])->name('addStaff');
Route::get('/allStaff', [StaffController::class, 'allStaff'])->name('allStaff');

//Hiển thị nhân viên-------vvvvvvvv
Route::get('/unactiveStaff/{staffid}', [StaffController::class, 'unactiveStaff'])->name('unactiveStaff');
Route::get('/activeStaff/{stafftid}', [StaffController::class, 'activeStaff'])->name('activeStaff');
//Hiển thị nhân viên---------^^^^^^

Route::post('/saveStaff', [StaffController::class, 'saveStaff'])->name('saveStaff');
//Xóa nhân viên
Route::get('/deleteStaff/{stafftid}', [StaffController::class, 'deleteStaff'])->name('deleteStaff');


//-------------------------MENU----------------------

//----------Menu 1------------
Route::get('/menu1', [Menu1Controller::class, 'menu1'])->name('menu1');

//------------------------GIỎ HÀNG----------------
Route::post('/savecart', [CartProductController::class, 'savecart'])->name('savecart');

//------------------------ĐƠN HÀNG---------------------
Route::get('/addDone', [DoneCotroller::class, 'addDone'])->name('addDone');
Route::get('/allDone', [DoneCotroller::class, 'allDone'])->name('allDone');

Route::post('/saveOrder', [DoneCotroller::class, 'saveOrder'])->name('saveOrder');

//------------------------TẠO PHIẾU--------------------
Route::get('/addcreate', [CreateOrderController::class,'addcreate'])->name('addcreate');
Route::get('/allcreate', [CreateOrderController::class,'allcreate'])->name('allcreate');
Route::post('/savecreate', [CreateOrderController::class, 'savecreate'])->name('savecreate');