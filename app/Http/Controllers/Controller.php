<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     function object2array($object) {
        $object =  json_decode( json_encode( $object),true);
        return  $object;
    }

    //失败输出
    public function Fail($msg='',$status=1,$data=[]){
        $arr = [
            'status'=>$status,
            'msg'=>$msg,
            'data'=>$data,
        ];
        echo  json_encode($arr);
    }

    //成功输出
    public function Success($data=[],$msg='',$status=0){
        $arr = [
            'status'=>$status,
            'msg'=>$msg,
            'data'=>$data,
        ];
        echo  json_encode($arr);
    }

}
