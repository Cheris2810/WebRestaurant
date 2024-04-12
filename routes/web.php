<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
