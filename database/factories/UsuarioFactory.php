<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'username' => $this->faker->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => '1234',
            'categorias' => $this->faker->word,
            'tareas_completadas' => '0',
            'tareas_completadas_totales' => $this->faker->numberBetween(1, 20),
            'puntos_totales' => $this->faker->numberBetween(100, 1000),
            'tipos_adquiridos' => $this->faker->word,
            'tareas_activas' => $this->faker->randomElements(['1', '2', '3', '4', '5'], 3),
        ];
    }
}
