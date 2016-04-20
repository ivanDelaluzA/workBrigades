<?php

namespace App;

use App\Colony;
use Illuminate\Database\Eloquent\Model;

class ColonyScope extends Model {
	public function colonies() {
		return $this->hasMany(Colony::class);
	}
}
