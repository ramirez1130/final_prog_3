<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

	protected $table = 'users';

	protected $fillable = [
		'name','lastname','dni','email','username','password','team_id','gender_id','type'
	];

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
        return $this->belongsToMany(Match::class);
    }
}