<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesoresCategorias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profesores_categorias', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('profesor_id')->unsigned();
        $table->integer('categoria_nivel_id')->unsigned();
        $table->foreign('profesor_id')->references('id')->on('profesors');
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
      Schema::dropIfExists('profesores_categorias');
    }
}
