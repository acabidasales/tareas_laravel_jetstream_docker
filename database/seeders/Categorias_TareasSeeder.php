<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Categorias_Tarea;

class Categorias_TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias_tareas = new Categorias_Tarea();
        $categorias_tareas->categoria = "Comida";
        $categorias_tareas->descripcion = "Tareas relacionadas con la comida";
        $categorias_tareas->save();

        $categorias_tareas = new Categorias_Tarea();
        $categorias_tareas->categoria = "Deporte";
        $categorias_tareas->descripcion = "Tareas relacionadas con el deporte";
        $categorias_tareas->save();
    }
}
