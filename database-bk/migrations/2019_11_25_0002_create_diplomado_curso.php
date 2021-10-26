<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomadoCurso extends Migration
{
    /**
     * Es una tabla intermedia para los cursos y los participantes
     */
    public function up()
    {
        Schema::create('diplomado_curso', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->Integer('num_modulo')->unsigned();
            $table->Integer('diplomado_id')->unsigned();
            $table->Integer('curso_id')->unsigned();

            $table->foreign('diplomado_id')->references('id')->on('diplomados')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExist('diplomado_curso');
    }
}
