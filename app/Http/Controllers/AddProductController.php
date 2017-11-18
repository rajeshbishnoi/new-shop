<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\AddProduct;
use App\Http\Middleware\SessionCheck;
use App\Category;
use DB;

class AddProductController extends Controller
{

//To call the middleware class for the session check
	//this constructor is called and then the class has the function to check all the functions on this page
public function __construct()
  {
      $this->middleware(SessionCheck::class);
  }


	public function adds(){

		$admin_id = session('admin_id');

	$category=Category::where('label','0')->get();

	$subcategory=Category::where('label','!=','0')->get();


	$data=compact('category','subcategory');

	dd($data);
	die();

	return view('/admin/addproduct',$data);

	}



//*********CALLED AFTER ADDPRODUCT SUBMIT*********//
	public function add(Request $request){	
		$Login= new AddProduct;

		if ($request['addproduct_id']) {
			
		$Login=array(

		'addproduct_name' => $request['name'],
    	'addproduct_size' => $request['size'],
    	'addproduct_status'=>$request['status'],

			);
    	AddProduct::where('addproduct_id', $request['ID'])->update($Login);

    	return redirect('/admin/viewproduct');
		}
		
		else{

		$product_image = $request->file('image');
		if ($product_image!="") {
			$destinationPath='resources/assets/uploads/productimages';
			$imageName = 'productimages/'.time().'.'.$product_image->getClientOriginalExtension();

			$product_image->move($destinationPath,$imageName);

		}
		else {
			$imageName="";
		}

		$Login->addproduct_category=$request['p_category'];
    	$Login->addproduct_subcategory=$request['sub_category'];
    	$Login->addproduct_name = $request['name'];
    	$Login->addproduct_size = $request['size'];
    	$Login->addproduct_status=$request['status'];
    	$Login->addproduct_description=$request['description'];
    	$Login->addproduct_price=$request['price'];
    	$Login->addproduct_disprice=$request['discountprice'];
		
		$Login->addproduct_image=$imageName;	    	
    	$Login->save();
    	return redirect('/admin/viewproduct');
	
	}
}

	public function edit($id=false){
		
	  if($id !=""){

            $get = AddProduct::where('addproduct_id' ,$id)->get();


            $data = compact('get');
        return view('admin/addproduct',$data);


        } else
        {

    $admin_id = session('admin_id');

	$category=Category::where('label','0')->get();

	$get="";

	$subcategory=Category::where('label','!=','0')->get();

	$data=compact('category','subcategory','get');

	return view('/admin/addproduct',$data);

        }

	}


	public function view($id=false)
	{
		if($id !="")
			{

			$user = AddProduct::where(['addproduct_id' => $id])->get();
        	$file_path = 'resources/assets/uploads/'.$user[0]['addproduct_image'];
        	\File::delete($file_path);


				$get_data=AddProduct::where('addproduct_id',$id)->delete();

				$get_data=AddProduct::get();
			}

		else
			{
				$get_data=AddProduct::paginate(1);
			}

		$data=compact('get_data');

		return view('/admin/viewproduct',$data);
	}

	public function getcategory($function,$id){

		$subcategory = Category::where('label',$id)->get();

		$data= compact('function','subcategory');

		return view('/admin/ajax',$data);
	}
}
