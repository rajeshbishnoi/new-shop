<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\AdminLogin;
use DB;

class AdminLoginController extends Controller
{
   public function login(Request $request){

    	$login_name = $request['username'];
    	$login_password = $request['password'];

    	$loginaccess=AdminLogin::where('login_uname',$login_name)->where('login_password',$login_password)->count();

        //session

    	if($loginaccess==1)
    	{
            session(['admin_id'=>'loginaccess->login_id']);
    		return redirect('/admin/categoryselection');
    	}

    	else
    		return redirect('/admin/login');
	}

    public function logout(){

        session()->forget('admin_id');

        // session()->flush();

        return redirect('/admin/login');

    }

}
