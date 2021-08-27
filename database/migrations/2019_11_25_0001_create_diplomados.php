<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiplomados extends Migration
{
    public function up()
    {
        Schema::create('diplomados', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nombre_diplomado');
            $table->integer('cupo_maximo');
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
        Schema::dropIfExists('diplomados');
    }
}
