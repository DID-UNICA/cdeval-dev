<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfesorCurso extends Migration
{
    /**
     * Es una tabla intermedia para los cursos y los instructores
     */
    public function up()
    {
        Schema::create('profesor_curso', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->Integer('curso_id')->unsigned();
            $table->Integer('profesor_id')->unsigned();
            $table->Integer('tema_seminario_id')->unsigned()->nullable();

            $table->string('folio_inst')->nullable();
            $table->string('folio_peque')->nullable();
            $table->date('fecha_envio')->nullable();
            $table->date('fecha_exposicion')->nullable();

            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('profesor_id')->references('id')->on('profesors');
            $table->foreign('tema_seminario_id')->references('id')->on('temas_seminarios');

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
       Schema::dropIfExist('profesor_curso');
    }
}
