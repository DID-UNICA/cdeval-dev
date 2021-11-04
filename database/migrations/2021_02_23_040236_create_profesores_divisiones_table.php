<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesoresDivisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores_divisiones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_profesor')->unsigned();
            $table->integer('id_division')->unsigned();
            $table->foreign('id_profesor')->references('id')->on('profesors');
            $table->foreign('id_division')->references('id')->on('divisions');
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
        Schema::dropIfExists('profesores_divisiones');
    }
}
