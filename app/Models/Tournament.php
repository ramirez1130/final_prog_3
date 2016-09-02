<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model{

	protected $table = 'TOURNAMENTS';

	protected $fillable = ['NAME','PRICE','TYPE_TOURNAMENT_ID','REWARD','QUOTA'];

	public function matches(){
		$this->hasMany(Match::class);
	}

	public function typeTournament(){
		return $this->hasOne(TypeTournament::class,'id','type_tournament_id');
	}

	public function teams(){
		return $this->belongsTo(Team::class);
	}

}