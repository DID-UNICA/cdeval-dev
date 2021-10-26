<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TemasSeminarioProfesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas_seminario_profesor', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->Integer('tema_id')->unsigned();
            $table->Integer('profesor_id')->unsigned();
            $table->Integer('curso_id')->unsigned();
            
            $table->foreign('tema_id')->references('id')->on('temas_seminarios')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('cascade');
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
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
        Schema::dropIfExist('temas_seminario_profesor');
    }
}
