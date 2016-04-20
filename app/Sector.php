<?php

namespace App;

use App\Brigade;
use App\Request as Petition;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model {

	public function requests() {
		return $this->hasMany(Petition::class);
	}

	public function brigades() {
		return $this->belongsToMany(Brigade::class);
	}
}
