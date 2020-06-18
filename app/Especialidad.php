<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    //
    protected $fillable = ['id', 'nom_esp', 'activo'];

    public $timestamps = false;
}
