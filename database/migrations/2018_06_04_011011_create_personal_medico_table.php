<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalMedicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_pm',50);
            $table->string('app_pm',50);
            $table->string('apm_pm',50);
            $table->string('car_pm',3);
            $table->integer('exp_pm');
            $table->string('tur_pm',10);
            $table->string('tel_pm',20);
            $table->string('dir_pm',150);
            $table->string('sex_pm',1);
            $table->string('telRef_pm',20);
            $table->date('fecNac_pm');
            $table->string('activo', 2)->default('si');
            //$table->string('email_pm',50);
            //$table->string('pass_pm',50);
            $table->unsignedInteger('especialidad_id');
            $table->foreign('especialidad_id')->references('id')->on('especialidads');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_medicos');
    }
}
