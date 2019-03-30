<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
    public function user(Request $request){
        return view('index/user');
    }
    //添加执行
    public function useradddo(Request $request){
        $data=$request->all();
        $res=DB::table('Contacts')->insert($data);
        if($res){
            return redirect('table');
        }else{
            return false;
        }
    }
    //展示
    public function table(){
        $res=DB::table('Contacts')->get();
        return view('index/table',['res'=>$res]);
    }
    //删除
    public function delete(Request $request){
        $id=$request->all();
        $where=[
            'id'=>$id
        ];
        $res=DB::table('Contacts')->where($where)->delete();
        if($res){
                return 1;
        }else{
                return 2;
        }

    }


}
