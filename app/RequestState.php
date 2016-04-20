<?php

namespace App;

use App\Request as Petition;
use Illuminate\Database\Eloquent\Model;

class RequestState extends Model {
	//
	protected $fillable = [];

	public function requests() {
		return $this->hasMany(Petition::class);
	}
}
