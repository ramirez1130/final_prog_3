<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable{

	protected $table = 'USERS';

	protected $fillable = [
		'NAME','LASTNAME','DNI','EMAIL','USERNAME','PASSWORD','TEAM_ID','GENDER_ID','TYPE'
	];

	protected $hidden = ['password', 'remember_token'];

	public static $rules = [
        'name'      =>  'required|min:5',
        'lastname'  =>  'required|min:5',
        'dni'       =>  'integer|between:10000000,90000000',
        'email'     =>  'required|email|unique:users',
        'username'  =>  'required|alpha_num|min:8',
        'password'  =>  'required',
        'type'      =>  'required'
    ];

	public function team(){
		return $this->hasOne(Team::class,'id','team_id');
	}

	public function gender(){
		return $this->hasOne(Gender::class,'id','gender_id');
	}

	public function matches(){
        return $this->belongsToMany(Match::class,'user_match')->withPivot('score');
    }

	public function calculateAverage(){
		$scores = collect();

		foreach($this->matches as $match){
			$scores->push($match->pivot->score);
		}

		return number_format($scores->avg(),2);

	}
}