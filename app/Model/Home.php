<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    public static $rules = [
		'fname' => 'required|unique|max:255',
		'lname' => 'required',
	];
	
	public static $attribute = [
		'fname' => 'first name',
		'lname' => 'last name',
	];
}
