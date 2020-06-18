<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaIntTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sala_ints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_sInt',15);
            $table->integer('capCam_sInt');
            $table->string('ubi_sInt',100);
            $table->unsignedInteger('especialidad_id');
            $table->string('activo', 2)->default('si');
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
        Schema::dropIfExists('sala_ints');
    }
}
