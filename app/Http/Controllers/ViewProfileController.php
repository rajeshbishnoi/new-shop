<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ViewProfile;
use DB;

class ViewProfileController extends Controller
{
    //
public function view(){
    $get_data= ViewProfile::get();
    $data=compact('get_data');
    // echo "<pre>";
    // print_r($data);
    // die;
    return view('admin/viewprofile',$data);
}
}
