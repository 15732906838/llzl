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
//登录
Route::get('login','UserController@login');
//首页
Route::get('index','UserController@index');
//信息管理系统
Route::get('user','UserController@user');
//添加执行
Route::post('useradddo','UserController@useradddo');
//展示
Route::get('table','UserController@table');
<<<<<<< HEAD
//客户服务信息
Route::get('customeradd','Customer\CustomerController@index');
//客户服务信息添加
Route::post('dataadd','Customer\CustomerController@dataadd');
//日程服务安排
Route::get('customerlist','Customer\CustomerController@customerlist');
//删除
Route::get('del','Customer\CustomerController@del');
=======
//删除
Route::post('delete','UserController@delete');



//客户信息管理
Route::get('/client/clientadd','ClientController@clientAdd');
Route::get('/client/clientlist','ClientController@clientList');
Route::post('/client/clientadddo','ClientController@clientadddo');
Route::get('/client/del/{id}','ClientController@del');




>>>>>>> 0e7107da6edb1dc0f59c7365b5b1448ce280af83





