<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Matadero;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\matadero>
 */
class MataderoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {  return [
        'nombremarrano' => $this->faker->word(),
        'hora' => $this->faker->numberBetween(1,99),
        'peso'=> $this->faker->numberBetween(1,1900),
        'estado' => $this->faker->word()
    ];
}
}
