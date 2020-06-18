<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHojaEvolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_evols', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('historial_id')->unsigned();
            $table->string('sVit_hoj',50);
            $table->string('sub_hoj',50);
            $table->string('obj_hoj',50);
            $table->string('ana_hoj',50);
            $table->string('plan_hoj',50);
            $table->date('nuevaF_hEvol');
            
            $table->foreign('historial_id')->references('id')->on('historial_clinicos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoja_evols');
    }
}
