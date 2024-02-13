<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tipos_Tareas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tipos_tareas>
 */
class Tipos_tareasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Tipos_Tareas::class;

    public function definition()
    {
        return [
            'tipo' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
        ];
    }
}
