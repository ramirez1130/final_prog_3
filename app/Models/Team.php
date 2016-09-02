<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model{

    protected $table = 'TEAMS';

    protected $fillable = ['NAME','TOURNAMENT_ID'];

    public $timestamps = false;

    public function matches(){
    	return $this->hasMany(Match::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tournament(){
        return $this->hasOne(Tournament::class,'id','tournament_id');
    }

}