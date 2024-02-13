<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Models\TiposTareas;
use App\Models\CategoriasTareas;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tarea::with('tipo', 'categoria')->get();
        // return Tarea::where('categoria', '=', 'ejercicio')->get();
    }

    public function show(Tarea $tarea) // Ex: http://127.0.0.1:8000/api/tareas/1
    {
        return $tarea;
    }

    public function store(Request $request)
    {
        $tarea = new Tarea();
        $tarea->titulo_tarea = $request->titulo_tarea;
        $tarea->descripcion_tarea = $request->descripcion_tarea;
        $tarea->tipo = $request->tipo;
        $tarea->categoria = $request->categoria;
        $tarea->puntos = $request->puntos;
        $tarea->save();

        return response()->json($tarea, 201);
    }

    public function update(Request $request, Tarea $tarea)
    {
        $tarea->titulo_tarea = $request->titulo_tarea;
        $tarea->descripcion_tarea = $request->descripcion_tarea;
        $tarea->tipo = $request->tipo;
        $tarea->categoria = $request->categoria;
        $tarea->puntos = $request->puntos;
        $tarea->save();

        return response()->json($tarea);
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return response()->json([
            'message' => 'Tarea borrada',
            'tarea' => $tarea
        ]);
    }
}
