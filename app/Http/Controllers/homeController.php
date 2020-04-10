<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Validator;
use Input;

class homeController extends Controller
{
    
	public function index(){
		// $user = User::get();
		$user = new User();
		// echo '<pre>';print_r($user->get_user_and_prfile_detail(1));die;
		return view('welcome');
	}
	
	public function formView(){
		return view('form');
	}

	// LoginFormValidation $request
	public function formValidation(Request $request){
		
		$rules = [
			'fname' => 'required|unique|max:255',
			'lname' => 'required',
		];
		$attribute = [
			'fname' => 'first name',
			'lname' => 'last name',
		];
		$v = Validator::make($request->all(), $rules);
		$v->setAttributeNames($attribute);		
		if ($v->fails())
		{
			return redirect()->back()->withErrors($v);
		}
		
	}
}
