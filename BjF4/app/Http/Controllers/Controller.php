<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //正确提示

    function fial($value){
        $arr=[
            'font'=>$value,
            'code'=>1
        ];
        echo json_encode($arr);


    }
//错误提示
    function errores($value){

        $arr=[
            'font'=>$value,
            'code'=>2
        ];
        echo json_encode($arr);exit;


    }

}
