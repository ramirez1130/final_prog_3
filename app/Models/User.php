<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

	protected $table = 'users';

	protected $fillable = [
		'name','lastname','dni','email','username','password','team_id','gender_id'
	];

	public function teams(){
		return $this->hasOne(Team::class);
	}

	public function genders(){
		return $this->hasOne(Gender::class);
	}

}