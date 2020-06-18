<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExaCompTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exa_comps', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('historial_id')->unsigned();
            $table->string('tip_exa',50);
            
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
        Schema::dropIfExists('exa_comps');
    }
}
