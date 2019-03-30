<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //登录
    public function login(){

        return view('user/login');
    }
    //首页
    public function index(){
        return view('index/index');
    }
    //联系人信息管理 添加
    public function user(){


        return view('index/user');
    }
    //展示
    public function table(){
        return view('index/table');
    }


}
