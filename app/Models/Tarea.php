<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = ['titulo_tarea','descripcion_tarea','tipo', 'categoria', 'puntos'];

    public function tipo()
    {
        return $this->belongsTo(Tipos_tarea::class, 'tipo');
    }

    public function categoria()
    {
        return $this->belongsTo(Categorias_tarea::class, 'categoria');
    }
}
