<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfesores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('rfc')->unique();
            $table->string('numero_trabajador')->unique();
            $table->string('curp')->nullable();
            $table->integer('categoria_nivel_id')->unsigned()->nullable();
            $table->date('fecha_nacimiento');
            $table->string('telefono')->nullable();
            $table->string('grado')->nullable();
            $table->string('email')->nullable();
            $table->longText('comentarios')->nullable();
            $table->string('genero')->nullable();
            $table->string('baja')->nullable();
            $table->string('causa_baja')->nullable();
            $table->longText('semblanza_corta')->nullable();
            $table->string('facebook')->nullable();
            $table->boolean('unam')->nullable();
            $table->string('procedencia')->nullable();

            $table->integer('facultad_id')->unsigned()->nullable();
            $table->integer('carrera_id')->unsigned()->nullable();
            $table->foreign('facultad_id')->references('id')->on('facultads');
            $table->foreign('carrera_id')->references('id')->on('carreras');
            $table->foreign('categoria_nivel_id')->references('id')->on('categoria_nivel');
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
        Schema::dropIfExists('profesores');
    }
}
