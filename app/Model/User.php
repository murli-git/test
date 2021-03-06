<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Model\UserProfile;

class User extends Authenticatable
{
    use Notifiable;

	// protected $table = '';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
	
	public function get_user_and_prfile_detail($id){
		$profileDetails = UserProfile::where('user_id','=',$id)->get();
		return $profileDetails;
	}
	
	public function profile()
    {
        return $this->hasOne('App\Model\UserProfile', 'user_id');
    }
}
