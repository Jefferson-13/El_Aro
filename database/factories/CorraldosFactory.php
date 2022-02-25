<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Corraldos>
 */
class CorraldosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'nombremarrano' => $this->faker->word(),
            'mesesdevida'=> $this->faker->numberBetween(1,99),
            'estado'=> $this->faker->word(),
            'comidaconsum'=> $this->faker->word()
        ];
    }
}
