<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use DB;

class CategoryController extends Controller
{
 	    public function savecategory(Request $request){
 	    	if(session('admin_id')==""){
 	    		return redirect('/admin/login');
 	    	}
 	    
 	    else{	
    	$Addcategory= new Category;
    	$Addcategory->category_size = $request['size'];
    	$Addcategory->category_name = $request['category_name'];

    	$Addcategory->save();
    	
     	return redirect('/'); 
     	}
        }
}
