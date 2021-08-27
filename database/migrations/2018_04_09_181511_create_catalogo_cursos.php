<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogoCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogo_cursos', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre_curso');
            $table->string('duracion_curso');
            $table->string('tipo');
            $table->string('institucion');
            $table->longText('tipo_difusion')->nullable();
            $table->longText('presentacion')->nullable();
            $table->longText('dirigido')->nullable();
            $table->longText('objetivo')->nullable();
            $table->longText('contenido')->nullable();
            $table->longText('sintesis')->nullable();
            $table->longText('metodologia')->nullable();
            $table->longText('acreditacion')->nullable();
            $table->longText('previo')->nullable();
            $table->longText('evaluacion')->nullable();
            $table->longText('bibliografia')->nullable();
            $table->date('fecha_disenio');
            $table->integer('coordinacion_id')->unsigned();
            $table->string('clave_curso')->unique();

            $table->foreign('coordinacion_id')->references('id')->on('coordinacions');

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
        Schema::dropIfExists('catalogo_cursos');
    }
}
