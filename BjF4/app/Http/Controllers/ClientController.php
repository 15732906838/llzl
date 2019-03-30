<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class ClientController extends Controller
{
    //客户管理添加
    public function clientAdd(){
        return view('client/clientadd');
    }
    //客户管理添加执行
    public function clientadddo(Request $request){
        $data=$request->input();
        $res=DB::table('crm_client')->insert($data);
        if($res){
            return redirect('/client/clientlist');
        }
    }
    //客户管理列表展示
    public function clientList(){
        $data=DB::table('crm_client')->get();
        foreach ($data as $k=>$v){
            $v->create_time=date('Y-m-d H:i:s',$v->create_time);
        }
        return view('client/clientlist',['data'=>$data]);
    }
    //删除
    public function del($id){
        $res=DB::table('crm_client')->where('client_id',$id)->delete();
        if($res){
            return redirect('/client/clientlist');
        }
    }
}
