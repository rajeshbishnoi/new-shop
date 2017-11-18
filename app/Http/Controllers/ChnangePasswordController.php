<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Requests;
use App/ChangePassword
use DB;

class ChnangePasswordController extends Controller
{
        public function changepasswordadmin(Request $request){
    	
        $get_data=ChangePassword::where('login_email',$oldpassword)->where('login_')->get();

    	$data=compact($get_data);
    	
    	if ($get_data==1) {
    		
    	$ChangePassword= new ChangePassword;
    	
    	$ChangePassword->login_password = $request['newpassword'];

    	$ChangePassword->save();
    	
     	return redirect('/');

    		}
    }

}
