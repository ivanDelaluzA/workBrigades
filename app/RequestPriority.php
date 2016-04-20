<?php

namespace App;

use App\Request as Petition;
use Illuminate\Database\Eloquent\Model;

class RequestPriority extends Model {
	//
	public function requests() {
		//return $this->belongsToMany(Petition::class);
		return $this->hasMany(Petition::class);
	}
}
