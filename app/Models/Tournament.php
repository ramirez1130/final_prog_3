<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model{

	protected $table = 'tournaments';

	protected $fillable = ['name'];

	public function matches(){
		$this->hasMany(Match::class);
	}

	public function typeTournament(){
		return $this->hasOne(TypeTournament::class);
	}

}