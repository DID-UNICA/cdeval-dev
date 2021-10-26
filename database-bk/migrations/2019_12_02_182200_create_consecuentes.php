<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateConsecuentes extends Migration
{
    /**
     * Es una tabla intermedia para los cursos y los participantes
     */
    public function up()
    {
        Schema::create('consecuentes', function (Blueprint $table) {
            $table->Integer('catalogo_id')->unsigned();
            $table->Integer('siguiente_catalogo_id')->unsigned();
            $table->increments('id')->unique();
            
            $table->foreign('catalogo_id')->references('id')->on('catalogo_cursos')->onDelete('cascade');
            $table->foreign('siguiente_catalogo_id')->references('id')->on('catalogo_cursos')->onDelete('cascade');
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
       Schema::dropIfExist('consecuentes');
    }
}