<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvaluacionXSeminario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_evaluacion_x_seminario', function (Blueprint $table) {
            $table->increments('id');
          $table->integer('p1'); 
          $table->string('p1_arg',300);
          $table->integer('p2'); 
          $table->string('p2_arg',300);
          $table->integer('p3'); 
          $table->string('p3_arg',300);
          $table->integer('p4'); 
          $table->string('p4_arg',300);
          $table->integer('p5'); 
          $table->string('p5_arg',300);
          $table->integer('p6');
		  $table->string('p6_arg',300);
          $table->integer('participante_curso_id')->unsigned();
          $table->integer('curso_id')->unsigned();

          $table->timestamps();
          $table->foreign('participante_curso_id')
                  ->references('id')->on('participante_curso');
            $table->foreign('curso_id')
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
        Schema::dropIfExists('_evaluacion_x_seminario');
    }
}
