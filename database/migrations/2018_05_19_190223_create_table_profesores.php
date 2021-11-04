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
            $table->string('rfc')->unique()->nullable();
            $table->string('numero_trabajador')->unique()->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('telefono')->nullable();
            $table->string('grado')->nullable();
            $table->string('abreviatura_grado')->nullable();
            $table->string('email')->nullable();
            $table->string('genero')->nullable();
            $table->string('baja')->nullable();
            $table->string('causa_baja')->nullable();
            $table->longText('semblanza_corta')->nullable();
            $table->string('facebook')->nullable();
            $table->boolean('unam')->nullable();
            $table->string('procedencia')->nullable();
            $table->integer('facultad_id')->unsigned()->nullable();
            $table->foreign('facultad_id')->references('id')->on('facultads');
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
