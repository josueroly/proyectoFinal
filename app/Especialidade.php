<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    //
    protected $fillable = ['id','cod_esp', 'nom_esp', 'activo',];

    public $timestamps = false;
}
