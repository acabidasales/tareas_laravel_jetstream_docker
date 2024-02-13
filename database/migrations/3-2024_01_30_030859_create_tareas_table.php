<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo_tarea', 254);
            $table->string('descripcion_tarea', 254);
            $table->unsignedBigInteger('tipo');
            $table->unsignedBigInteger('categoria');
            $table->integer('puntos');
            $table->timestamps();

            $table->foreign('tipo')->references('id')->on('tipos_tareas');
            $table->foreign('categoria')->references('id')->on('categorias_tareas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tareas');
    }
};
