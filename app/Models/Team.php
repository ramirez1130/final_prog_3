<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model{

    protected $table = 'teams';

    protected $fillable = ['name'];

    public $timestamps = false;

    public function matches(){
    	return $this->hasMany(Match::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}