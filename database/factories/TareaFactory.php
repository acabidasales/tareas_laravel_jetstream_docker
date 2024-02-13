<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tarea::class;

    public function definition()
    {
        return [
            'titulo_tarea' => $this->faker->sentence,
            'descripcion_tarea' => $this->faker->paragraph,
            'tipo' => $this->faker->randomElement([1, 2, 3]),
            'categoria' => $this->faker->randomElement([1, 2]),
            'puntos' => $this->faker->numberBetween(1, 5),
        ];
    }
}
