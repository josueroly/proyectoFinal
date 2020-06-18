<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ci_pac',15)->unique();
            $table->string('nom_pac',50);
            $table->string('app_pac',50);
            $table->string('apm_pac',50);
            $table->string('tel_pac',20);
            $table->string('dir_pac',150);
            $table->string('telRef_pac',20);
            $table->string('sex_pac',1);
            $table->string('estCiv_pac',20);
            $table->string('pro_pac',50);
            $table->date('fecNac');
            $table->string('activo', 2)->default('si');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
