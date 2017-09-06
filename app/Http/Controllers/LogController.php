<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/1
 * Time: 14:06
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;


class LogController extends Controller{

    public function index(){
        return view('log/login');
    }
    
    //登录 验证合法性
    public function check(){
        $username = isset($_POST['username'])?$_POST['username']:'';
        $pwd = isset($_POST['pwd'])?$_POST['pwd']:'';
        
        //验证用户的合法性
        $pwd = md5($pwd);
        $info = DB::select("select * from admin_user where username = '$username' and pwd = '$pwd'");
        $info = $this->object2array($info);
        if ($info){
            $session = new session();
            $admin_user_id = $info[0]['id'];
            $session->set('admin_user_id',$admin_user_id);

            return view('admin/index');
        }else{
            return view('log/login');
        }
        
    }

    //退出登录
    public function out(){
        $session = new session();
        $res = $session->remove('admin_user_id');
        if ($res) {
            exit(view('log/login'));
        }
    }


}