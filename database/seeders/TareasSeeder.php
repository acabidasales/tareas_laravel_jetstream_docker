<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Tarea;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new Tarea();
        $users->titulo_tarea = "Caminata Matutina";
        $users->descripcion_tarea = "Da un paseo revitalizante al aire libre para empezar el día con energía positiva.";
        $users->tipo = "1";
        $users->categoria = "2";
        $users->puntos = "1";
        $users->save();

        $users = new Tarea();
        $users->titulo_tarea = "Rutina de Estiramientos";
        $users->descripcion_tarea = "Dedica tiempo a estirar tus músculos para mejorar la flexibilidad y reducir la tensión.";
        $users->tipo = "1";
        $users->categoria = "2";
        $users->puntos = "1";
        $users->save();

        $users = new Tarea();
        $users->titulo_tarea = "Entrenamiento de 7 Minutos";
        $users->descripcion_tarea = "Realiza una breve sesión de ejercicios que incluya saltos, flexiones y abdominales para un impulso rápido pero efectivo.";
        $users->tipo = "1";
        $users->categoria = "2";
        $users->puntos = "1";
        $users->save();

        $users = new Tarea();
        $users->titulo_tarea = "Yoga Ligero";
        $users->descripcion_tarea = "Practica algunas posturas simples para mejorar la fuerza y la concentración, mientras relajas tu mente.";
        $users->tipo = "1";
        $users->categoria = "2";
        $users->puntos = "1";
        $users->save();

        $users = new Tarea();
        $users->titulo_tarea = "Correr en el Sitio";
        $users->descripcion_tarea = "Una forma sencilla de elevar tu ritmo cardíaco en cualquier lugar.";
        $users->tipo = "1";
        $users->categoria = "2";
        $users->puntos = "1";
        $users->save();

        $users = new Tarea();
        $users->titulo_tarea = "Batido Nutritivo";
        $users->descripcion_tarea = "Mezcla frutas frescas, yogur natural y una cucharada de avena para un batido lleno de vitaminas y fibra.";
        $users->tipo = "1";
        $users->categoria = "1";
        $users->puntos = "1";
        $users->save();
    }
}
