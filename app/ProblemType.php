<?php

namespace App;

use App\RequestType;
use Illuminate\Database\Eloquent\Model;

class ProblemType extends Model {
	public function requestType() {
		return $this->belongsTo(RequestType::class);
	}
}
