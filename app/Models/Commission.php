<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Commission extends Model{

    protected $table = 'COMMISSIONS';

    protected $fillable = ['COMMISSION','AMOUNT'];

}