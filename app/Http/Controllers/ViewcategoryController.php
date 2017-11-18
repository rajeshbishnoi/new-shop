<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Viewcategory;
use DB;

class ViewcategoryController extends Controller
{
        public function view(){
        	if (session('admin_id')=="") {
        		return redirect('/admin/login');
        	}
        	else{
    	$get_data = Viewcategory::get();

    	$data=compact('get_data');
    	// echo "<pre>";
        // print_r($get_data);
    	// dd($data);
    	
    	return view('admin/viewcategory',$data);
    }
}
}
