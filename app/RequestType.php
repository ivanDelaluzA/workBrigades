<?php

namespace App;

use App\ProblemType;
use App\Request as Petition;
use Illuminate\Database\Eloquent\Model;

class RequestType extends Model {
	public function requests() {
		return $this->hasMany(Petition::class);
	}
	public function problemTypes() {
		return $this->hasMany(ProblemType::class);
	}

}
