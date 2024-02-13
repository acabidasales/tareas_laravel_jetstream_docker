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
        Schema::create('users', function (Blueprint $table) {
            $table->string('username', 24)->primary();
            $table->string('email', 124)->unique();
            $table->string('password', 24);
            $table->string('categorias', 500);
            $table->string('tareas_completadas', 500);
            $table->integer('tareas_completadas_totales');
            $table->integer('puntos_totales');
            $table->string('tipos_adquiridos', 500);
            $table->string('tareas_activas', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
