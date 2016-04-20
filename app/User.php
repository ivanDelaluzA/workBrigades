<?php

namespace App;

use App\Activity;
use App\PersonalInformation;
use App\Request as Petition;
use App\Role;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];
	public function personalInformation() {
		return $this->belongsTo(PersonalInformation::class);
	}
	public function activities() {
		return $this->hasMany(Activity::class);
	}
	public function requests() {
		return $this->belongsToMany(Petition::class);
	}
	public function roles() {
		return $this->belongsToMany(Role::class);
	}
}
