<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new Usuario();
        $users->username = "admin";
        $users->email = "admin@admin.com";
        $users->password = "admin";
        $users->categorias = "comun";
        $users->tareas_completadas = "0";
        $users->tareas_completadas_totales = 12;
        $users->puntos_totales = 456;
        $users->tipos_adquiridos = "comun;";
        $users->tareas_activas = "1;2;3;5";
        $users->save();
    }
}
