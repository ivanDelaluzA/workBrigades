<?php

namespace App;

use App\Brigade;
use App\Citizen;
use App\Colony;
use App\RequestPriority;
use App\RequestState;
use App\RequestType;
use App\Sector;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Request extends Model {
	//
	protected $filable;

	public function state() {
		return $this->belongsTo(RequestState::class);
	}
	public function priority() {
		return $this->belongsTo(RequestPriority::class);
	}
	public function sector() {
		return $this->belongsTo(Sector::class);
	}
	public function brigade() {
		return $this->belongsTo(Brigade::class);
	}
	public function colony() {
		return $this->belongsTo(Colony::class);
	}
	public function type() {
		return $this->belongsTo(RequestType::class);
	}
	public function citizen() {
		return $this->belongsTo(Citizen::class);
	}
	public function users() {
		return $this->belongsToMany(User::class);
	}
}
