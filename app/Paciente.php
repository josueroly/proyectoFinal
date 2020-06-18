<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable = ['id', 'ci_pac', 'nom_pac', 'app_pac', 'apm_pac', 'tel_pac', 'dir_pac', 'telRef_pac', 'sex_pac', 'estCiv_pac', 'pro_pac', 'fecNac', 'activo',];

    public $timestamps = false;
}
