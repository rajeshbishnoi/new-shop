<?php

//*****************************ROUTES FOR THE NORMAL VIEWS*************************************//

Route::any('/','UserController@index');

Route::get('new-shop','UserController@index');

Route::get('/products','UserController@products');

Route::get('/mail','UserController@mail');

Route::get('/login','UserController@login');

Route::get('/products1','UserController@products1');

Route::get('/single','UserController@single');

Route::get('/codes','UserController@codes');

Route::get('/registered','UserController@registered');

Route::get('/checkout','UserController@checkout');

Route::any('/login','UserController@login');







//*****************************************LOGIN TO ADMIN PANEL**************************************//

Route::get('/admin/login',function(){
	return view('/admin/login');
});
Route::any('/loginadmin','AdminLoginController@login');




//LOGOUT
Route::any('/admin/logout','AdminLoginController@logout');




Route::any('/userlogin','UserController@userlogin');



//************************************SELECT CATEGORY**********************************************//
Route::get('/admin/categoryselection',function(){
	if(session('admin_id')=="")
		return view('/admin/login');

	return view('/admin/categoryselection');
});

Route::any('/savecategory','CategoryController@savecategory');

// Route::any('/saveadmin','UserController@saveadmin');

Route::any('/saveadmin','UserController@savelogin');






//********************ROUTE FOR THE PASSWORD *******************************************//
Route::any('/changepasswordadmin','ChangePasswordController@changepasswordadmin');

Route::any('/admin/changepassword',function(){
	if(session('admin_id')=="")
		return view('/admin/login');

	return view('/admin/changepassword');
	});






//*********************************VIEW CATEGORY TABLE ********************************************
Route::any('/admin/viewcategory','ViewcategoryController@view');




//*************************VIEW PROFILE CONTROLLER********************************

Route::any('/admin/viewprofile','ViewProfileController@view');






//**************************ADD PRODUCT CONTROLLER**************************************//

Route::any('/addproduct','AddProductController@add');//Return from submit of the form


//If return to update from the edit page
Route::any('/admin/addproduct/{id?}','AddProductController@edit');


Route::any('/admin/addproduct',function(){
	if(session('admin_id')=="")
		return view('/admin/login');

	'AddProductController@adds';//Adds is when the page is called for the first time
});




Route::any('/admin/subcategory/{subcategorys}/{id}','AddProductController@getcategory');


// Route::any('/admin/category/subcategorys/{id}',return view)

Route::any('/admin/viewproduct/{id?}','AddProductController@view');







//******************************LOGIN HEADER ROUTE***********************************

Route::any('/admin/loginheader',function(){
	if(session('admin_id')=="")
		return view('/admin/login');
	
	return view('/admin/loginheader');
});
