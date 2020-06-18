<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtencionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atencions', function (Blueprint $table) {
            $table->unsignedInteger('paciente_id');
            $table->unsignedInteger('especialidad_id');
            $table->date('fec_ate');
            $table->string('tip_ate',10);
            $table->foreign('paciente_id')->references('id')->on('pacientes');
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
        Schema::dropIfExists('atencions');
    }
}
