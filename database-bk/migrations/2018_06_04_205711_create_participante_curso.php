<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipanteCurso extends Migration
{
    /**
     * Es una tabla intermedia para los cursos y los participantes
     */
    public function up()
    {
        Schema::create('participante_curso', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->Integer('curso_id')->unsigned();
            $table->Integer('profesor_id')->unsigned();
            $table->boolean('confirmacion')->nullable();
            $table->boolean('asistencia')->nullable();
            $table->boolean('pago_curso')->nullable();
            $table->Double('monto_pago')->nullable();
            $table->boolean('cancelación')->nullable();
            $table->Integer('evaluacion_mobilirario')->nullable();
            $table->Integer('evaluacion_limpieza')->nullable();
            $table->Integer('espera')->nullable();
            $table->boolean('estuvo_en_lista')->nullable();
            $table->boolean('contesto_hoja_evaluacion')->nullable();
            $table->boolean('acreditacion')->nullable();
            $table->string('causa_no_acreditacion')->nullable();
            $table->double('calificacion')->nullable();
            $table->boolean('inscrito')->nullable();
            $table->string('comentario')->nullable();
            $table->boolean('adicional')->nullable();

            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('profesor_id')->references('id')->on('profesors');

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
       Schema::dropIfExist('participante_curso');
    }
}
