<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//用户模块
Route::resource("/adminuser","Admin\UserController");
//继祥开发订单模块
Route::resource("/adminorder","Admin\OrderController");
//军哥开发类别模块
Route::resource("/admincate","Admin\CateController");

