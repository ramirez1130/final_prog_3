<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model{

	protected $table = 'matches';

	protected $fillable = ['local','visitor','date','court_id'];

	public function courts(){
		return $this->hasOne(Court::class);
	}

	public function team(){
		return $this->belongsTo(Team::class);
	}

}