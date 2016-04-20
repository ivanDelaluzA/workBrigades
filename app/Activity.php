<?php

namespace App;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model {
	public function user() {
		return $this->belongsTo(User::class);
	}
	public function roles() {
		return $this->belongsToMany(Role::class);
	}
}
