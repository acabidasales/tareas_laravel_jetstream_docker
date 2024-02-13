<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tipos_Tarea;

class Tipos_TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos_tareas = new Tipos_Tarea();
        $tipos_tareas->tipo = "Comun";
        $tipos_tareas->descripcion = "Tareas que aparecen de forma comun";
        $tipos_tareas->save();
    }
}
