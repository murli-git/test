<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\User;
use App\Model\Home;
use Validator;
use Input;

class homeController extends Controller
{
    
	public function index(){
		// echo $user = User::whereraw('1=1')->take(2)->toSql();
		// dd($user);
		// $user = new User();
		// echo '<pre>';print_r($user->get_user_and_prfile_detail(1));die;
		return view('welcome');
	}
	
	public function formView(){
		return view('form');
	}

	// LoginFormValidation $request
	public function formValidation(Request $request){
		$v = Validator::make($request->all(),Home::$rules);
		$v->setAttributeNames(Home::$attribute);		
		if ($v->fails())
		{
			return redirect()->back()->withErrors($v);
		}
		
	}
}
