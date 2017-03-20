<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
	protected $table = 'sexos';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id','nome'
    ];
}
