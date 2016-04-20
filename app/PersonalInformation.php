<?php

namespace App;

use App\Colony;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model {
	public function users() {
		return $this->belongsToMany(Request::class);
	}
	public function colony() {
		return $this->belongsTo(Colony::class);
	}
}
