<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','first_name','last_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','role'
    ];
	
	public function orders(){
	
		return $this->hasMany('App\Order');
	}
	
	public function roles(){
		return $this->belongsToMany('App\Role','user_role','user_id','role_id');
	}
	
	public function hasanyrole($roles){
		if(is_array($roles)){
			foreach($roles as $role){
				if($this->hasRole($role)){
					return true;
				}
			}
		} else{
				if($this->hasRole($role)){
					return true;
				}
		}
	return false;
	}
	public function hasRole($role){
	
	if($this->roles()->where('name',$role)->first()){
	return true;
	}
	return false;
	
	}

}
