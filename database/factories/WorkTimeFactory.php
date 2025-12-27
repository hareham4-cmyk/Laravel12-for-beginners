<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkTime>
 */
class WorkTimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'from' => fake()->time(),
            'to' => fake()->time(),
        ];
        //we must put a condition to check that "from" < "to" but  i will not ask chatgpt
    }
}
