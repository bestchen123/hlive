<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/8/31
 * Time: 10:49
 */

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Session\Session;


class CommonController extends Controller
{
    public function __construct(){
        $session = new session();
    	$admin_user_id = $session->get('admin_user_id');
    	if (empty($admin_user_id)) {	
    		exit(view('log/login'));
    	}

    }
    
       
   
}

?>