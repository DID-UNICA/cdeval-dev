<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores_carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_carrera')->unsigned();
            $table->foreign('id_profesor')->references('id')->on('profesors');
            $table->foreign('id_carrera')->references('id')->on('carreras');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesores_carreras');
    }
}
