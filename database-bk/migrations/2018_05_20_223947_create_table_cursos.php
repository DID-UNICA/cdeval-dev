<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCursos extends Migration
{
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('semestre_anio');
            $table->string('semestre_pi');
            $table->string('semestre_si');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('hora_inicio');
            $table->string('hora_fin');
            $table->String('dias_semana')->nullable();
            $table->integer('numero_sesiones');
            $table->string('texto_diploma');
            $table->double('costo');
            $table->integer('cupo_maximo');
            $table->integer('cupo_minimo');
            $table->integer('catalogo_id')->unsigned();
            $table->integer('salon_id')->unsigned();
            $table->foreign('catalogo_id')->references('id')->on('catalogo_cursos');
            $table->foreign('salon_id')->references('id')->on('salons');
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
        Schema::dropIfExists('cursos');
    }
}
