<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model{

	protected $table = 'tournaments';

	protected $fillable = ['name','price','type_tournament_id'];

	public function matches(){
		$this->hasMany(Match::class);
	}

	public function typeTournament(){
		return $this->hasOne(TypeTournament::class,'id','type_tournament_id');
	}

}