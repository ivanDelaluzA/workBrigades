<?php

namespace App;

use App\Request as Petition;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model {
	public function requests() {
		return $this->belongsToMany(Petition::class);
	}
}
