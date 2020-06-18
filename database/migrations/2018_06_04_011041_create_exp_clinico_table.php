<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpClinicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exp_clinicos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->string('nombre',50);
            $table->string('paterno',50);
            $table->string('materno',50);
            $table->unsignedInteger('personalMedico_id');
            $table->string('gSan_exp',15);
            
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('personalMedico_id')->references('id')->on('personal_medicos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exp_clinicos');
    }
}
