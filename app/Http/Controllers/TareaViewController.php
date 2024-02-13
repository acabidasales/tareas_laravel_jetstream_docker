<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Tipos_tarea;
use App\Models\Categorias_tarea;

class TareaViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* dd(Tarea::with('tipo', 'categoria')->get()) */
        return Inertia::render('Tarea/Index',['tareas' => Tarea::with('tipo', 'categoria')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Tarea/Create',['tipos' => Tipos_tarea::get(), 'categorias' => Categorias_tarea::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array_merge(
            $request->all(),
            $request->validate([
                'titulo_tarea'      => ['required', 'string', 'max:254'],
                'descripcion_tarea' => ['required', 'string', 'max:254'],
                'puntos'            => ['required', 'int', 'max:11'],
                'tipo_id'           => ['required', 'exists:tipos_tareas,id'],
                'categoria_id'      => ['required', 'exists:categorias_tareas,id']
            ])
        );

        Tarea::create([
            'titulo_tarea' => $request->titulo_tarea,
            'descripcion_tarea' => $request->descripcion_tarea,
            'tipo' => $request->tipo_id,
            'categoria' => $request->categoria_id,
            'puntos' => $request->puntos
    ]);

        return redirect()->route('tareas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        $tareaConRelaciones = Tarea::with('tipo', 'categoria')->find($tarea->id);

        return Inertia::render('Tarea/Show', ['tareas' => $tareaConRelaciones]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return Inertia::render('Tarea/Edit', ['tipos' => Tipos_tarea::all(), 'categorias' => Categorias_tarea::all(), 'tareas' => Tarea::with('tipo', 'categoria')->find($tarea->id),]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $validatedData = $request->validate([
            'titulo_tarea'      => ['required', 'string', 'max:254'],
            'descripcion_tarea' => ['required', 'string', 'max:254'],
            'puntos'            => ['required', 'integer', 'max:11'],
            'tipo_id'           => ['required', 'exists:tipos_tareas,id'],
            'categoria_id'      => ['required', 'exists:categorias_tareas,id']
        ]);

        $tarea->update($validatedData);


        return redirect()->route('tareas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();

        return redirect()->route('tareas.index');
    }

    // Puesta la ruta como excepción en tareas_laravel_jetstream\app\Http\Middleware\VerifyCsrfToken.php
}
