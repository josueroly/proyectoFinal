<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriaCliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_clis', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('historial_id')->unsigned();
            $table->string('pre_his',20);
            $table->string('est_his',20);
            $table->string('pes_his',20);
            
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
        Schema::dropIfExists('historia_clis');
    }
}
