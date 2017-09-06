<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/1
 * Time: 14:06
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class AdminController extends CommonController{

    public function index(){
        return view('admin/index');
    }

    public function role(){
    	return view('role/index');
    }
    
    public function menu(){
    	return view('menu/index');
    }

    public function user(){
        $info = DB::select('select * from admin_user');
        $info = $this->object2array($info);
    	return view('user/index',['info'=>$info]);
    }

    public function useradd(){
        return view('user/add');
    }

    public function useredit(){
        return view('user/edit');
    }

}