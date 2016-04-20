<?php

namespace App;

use App\Colony;
use Illuminate\Database\Eloquent\Model;

class SettlementType extends Model {
	public function Colonies() {
		return $this->hasMany(Colony::class);
	}
}
