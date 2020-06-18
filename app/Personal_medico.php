<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal_medico extends Model
{
        protected $fillable = ['id', 'nom_pm', 'app_pm', 'apm_pm', 'car_pm','exp_pm','tur_pm','tel_pm', 'dir_pm', 'sex_pm','telRef_pm', 'fecNac_pm', 'activo','especialidad_id',];

    public $timestamps = false;
}
