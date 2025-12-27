<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WashingType>
 */
class WashingTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title' => fake()->sentence(),
        'price' => fake()->numberBetween(10 , 40),
        'description' => fake()->paragraph(),
        'period' => fake()->int(),
        ];
    }
}
