<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Court extends Model{

	protected $table = 'COURTS';

	protected $fillable = ['NAME','LAT','LONG','OWNER'];

	public $timestamps = false;

}