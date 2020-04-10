<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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

	public function formValidation(LoginFormValidation $request){
		
	}
}
