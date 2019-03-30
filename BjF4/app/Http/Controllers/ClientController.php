<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    //
    public function clientAdd(){
        return view('client/clientadd');
    }
    //客户管理列表展示
    public function clientList(){
        return view('client/clientlist');
    }
}
