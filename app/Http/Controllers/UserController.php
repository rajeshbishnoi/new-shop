<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Login; // model name
use App\UserLogin;
use DB;







//********************THESE ARE THE ALL THE ROUTES THROUGH THE CONTROLLER***********************//

class UserController extends Controller
{
    public function index(){
    	return view('index');
    }

    public function checkout(){
    	return view('checkout');
    }

    public function codes(){
    	return view('codes');
    }

    public function login(){
    	return view('login');
    }

    public function mail(){
    	return view('mail');
    }

	public function products(){
    	return view('products');
    
    }

    public function products1(){
    	return view('products1');
    }
    
    public function registered(){
    	return view('registered');
    }
    
    public function single(){
    	return view('single');
    }



//*******************THIS IS THE NORMAL DATABASE ENTRY **************************//
    

    





    public function userlogin(Request $request){

        $name= $request['name'];
        $pass=$request['password'];

        $loginaccess=UserLogin::where('user_username',$name)->where('user_password',$pass)->count();

        if($loginaccess==1)
        {
            session(['user_id'=>'loginaccess->user_id']);
            return redirect('/');
        }


        else return redirect('/login');

    }












    public function saveadmin(Request $request){

       // dd($request);

        DB::table('login')->insert(
        ['login_email' => $request['email'],'login_password'=>$request['password']]);


        redirect('/');
    }












    public function savelogin(Request $request){

       // dd($request);

        // DB::table('login')->insert(
        // ['login_email' => $request['email'],'login_password'=>$request['password']]);


         $Interest = new Login;
          $Interest->login_email   =  $request['email'];
          $Interest->login_password   =  $request['password'];
          
          $Interest->save();


       return redirect('/');
    }













    public function register(Request $request){


    }

}
