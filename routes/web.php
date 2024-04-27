<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\CategoryProductController;

Route::get('/home', function(){
    return view('welcome');
});

Route::get('/', function () {
   return view('pages.user.loginuser');
});

Route::get('/menu', function () {
   return view('pages.menu.menutong');
});

Route::get('/menu-1', function () {
    return view('pages.menu.menu1');
});

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

Route::get('/unactivecategory/{categoryid}', [CategoryProductController::class, 'unactivecategory'])->name('unactivecategory');
Route::get('/activecategory/{categoryid}', [CategoryProductController::class, 'activecategory'])->name('activecategory');

Route::post('/savecategory', [CategoryProductController::class, 'savecategory'])->name('savecategory');


