<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EvaluacionFinalSeminario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_evaluacion_final_seminario', function (Blueprint $table) {
        $table->increments('id');
        //1. DESARROLLO DEL CURSO
        $table->integer('p1_1');
        $table->integer('p1_2');
        $table->integer('p1_3');
        $table->integer('p1_4');
        $table->integer('p1_5');
        //2. AUTOEVALUACION
        $table->integer('p2_1');
        $table->integer('p2_2');
        $table->integer('p2_3');
        $table->integer('p2_4');
          //3. COORDINACION DEL CURSO
          $table->integer('p3_1');
          $table->integer('p3_2');
          $table->integer('p3_3');
          $table->integer('p3_4');
          //4. FACILITADOR(A) UNO DEL SEMINARIO
          $table->integer('p4_1');
          $table->integer('p4_2');
          $table->integer('p4_3');
          $table->integer('p4_4');
          $table->integer('p4_5');
          $table->integer('p4_6');
          $table->integer('p4_7');
          $table->integer('p4_8');
          $table->integer('p4_9');
          $table->integer('p4_10');
          $table->integer('p4_11');
          //5. FACILITADOR(A) DOS DEL SEMINARIO
          $table->integer('p5_1')->nullable();
          $table->integer('p5_2')->nullable();
          $table->integer('p5_3')->nullable();
          $table->integer('p5_4')->nullable();
          $table->integer('p5_5')->nullable();
          $table->integer('p5_6')->nullable();
          $table->integer('p5_7')->nullable();
          $table->integer('p5_8')->nullable();
          $table->integer('p5_9')->nullable();
          $table->integer('p5_10')->nullable();
          $table->integer('p5_11')->nullable();
          //6. FACILITADOR(A) TRES DEL SEMINARIO
          $table->integer('p6_1')->nullable();
          $table->integer('p6_2')->nullable();
          $table->integer('p6_3')->nullable();
          $table->integer('p6_4')->nullable();
          $table->integer('p6_5')->nullable();
          $table->integer('p6_6')->nullable();
          $table->integer('p6_7')->nullable();
          $table->integer('p6_8')->nullable();
          $table->integer('p6_9')->nullable();
          $table->integer('p6_10')->nullable();
          $table->integer('p6_11')->nullable();
          //7.??RECOMENDAR??A EL CURSO A OTROS PROFESORES?
          $table->integer('p7');
          //8. ??C??MO SE ENTER?? DEL SEMINARIO?  //es un arreglo :v puede que seleccione m??s de una opci??n xd
          $table->string('p8',100);
          //Lo que me aport?? el seminario fue:
          $table->string('aporto',300);
          //Sugerencias y recomendaciones:	
          $table->string('sug',300);
          //??Qu?? otros cursos, talleres, seminarios o tem??ticos le gustar??a que se impartiesen o tomasen en cuenta para pr??ximas actividades?
          $table->string('otros',300);
          //??REA DE CONOCIMIENTO
          $table->string('conocimiento',300);
          //Tem??ticas:	
          $table->string('tematica',300);
          //??En qu?? horarios le gustar??a que se impartiesen los cursos, talleres, seminarios o diplomados?
          //Horarios Semestrales:
          $table->string('horarios',100);
          //Horarios Intersemestrales:
          $table->string('horarioi',100);
          $table->integer('participante_curso_id')->unsigned()->unique();
          $table->integer('curso_id')->unsigned();
          $table->foreign('curso_id')
                ->references('id')->on('cursos');
          $table->foreign('participante_curso_id','participante_curso_id_s')
                ->references('id')->on('participante_curso');
          $table->unique(['participante_curso_id','curso_id'],'parcitipante_y_seminario_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_evaluacion_final_seminario');
    }
}
