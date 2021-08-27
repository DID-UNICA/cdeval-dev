<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TemasSeminario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas_seminarios', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre');
            $table->Integer('duracion')->unsigned();
            $table->Integer('catalogo_id')->unsigned();
            
            $table->foreign('catalogo_id')->references('id')->on('catalogo_cursos')->onDelete('cascade');
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
        Schema::dropIfExist('temas_seminarios');
    }
}
