<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Categorias_Tareas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categorias_tareas>
 */
class Categorias_tareasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Categorias_Tareas::class;

    public function definition()
    {
        return [
            'categoria' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
        ];
    }
}
