<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('num_cam');
            $table->unsignedInteger('paciente_id');
            $table->unsignedInteger('salaInt_id');
            $table->date('fec_cam');
            $table->string('activo', 2)->default('si');
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('salaInt_id')->references('id')->on('sala_ints');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camas');
    }
}
