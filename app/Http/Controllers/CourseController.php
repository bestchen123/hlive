<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/1
 * Time: 14:06
 */

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class CourseController extends CommonController{

    public function category(){
        return view('course/category');
    }

    public function add(){
        return view('course/add');
    }
}