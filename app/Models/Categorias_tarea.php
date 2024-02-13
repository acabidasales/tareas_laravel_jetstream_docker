<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias_tarea extends Model
{
    protected $table = 'categorias_tareas';

    protected $primaryKey = 'id';

    public $timestamps = false;

    public function id()
    {
        return $this->hasMany(Tarea::class, 'categoria');
    }
}
