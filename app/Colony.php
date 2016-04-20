<?php

namespace App;

use App\ColonyScope;
use App\PersonalInformation;
use App\Request as Petition;
use App\SettlementType;
use Illuminate\Database\Eloquent\Model;

class Colony extends Model {
	public function requests() {
		return $this->hasMany(Petition::class);
	}

	public function settlementType() {
		return $this->belongsTo(SettlementType::class);
	}
	public function colonyScopes() {
		return $this->belongsTo(ColonyScope::class);
	}
	public function personalInformation() {
		return $this->hasMany(PersonalInformation::class);
	}

}
