<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvaluacionXCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_evaluacion_x_curso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('p1'); 
            $table->integer('p2');
            $table->integer('p3');
            $table->integer('p4');
            $table->integer('p5');
            $table->integer('p6');
			$table->integer('p7');
            $table->string('contenido',300); 
            $table->string('sug',300); 
            $table->timestamps();
            $table->integer('participante_curso_id')->unsigned();
			$table->integer('curso_id')->unsigned();

            $table->foreign('participante_curso_id')
                  ->references('id')->on('participante_curso');
			$table->foreign('curso_id')->unsigned()
				  ->references('id')->on('cursos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_evaluacion_x_curso');
    }
}