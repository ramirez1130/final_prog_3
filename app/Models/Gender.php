<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model{

	protected $table = 'GENDERS';

	protected $fillable = ['GENDER'];

	public function users(){
        return $this->belongsTo(User::class);
    }

}