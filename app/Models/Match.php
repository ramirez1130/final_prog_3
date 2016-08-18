<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model{

	protected $table = 'matches';

	protected $fillable = ['local','visitor','date','court_id','tournament_id'];

	public function court(){
		return $this->hasOne(Court::class,'id');
	}

	public function team_local(){
		return $this->belongsTo(Team::class,'local');
	}

	public function team_visitor(){
		return $this->belongsTo(Team::class,'visitor');
	}

	public function tournament(){
		return $this->belongsTo(Tournament::class);
	}

	public function users(){
		return $this->belongsToMany(User::class);
	}

}