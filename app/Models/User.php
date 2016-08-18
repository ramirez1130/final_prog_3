<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

	protected $table = 'users';

	protected $fillable = [
		'name','lastname','dni','email','username','password','team_id','gender_id'
	];

	public function team(){
		return $this->hasOne(Team::class,'id','team_id');
	}

	public function gender(){
		return $this->hasOne(Gender::class,'id','gender_id');
	}

	public function matches(){
        return $this->belongsToMany(Match::class);
    }
}