<?php

namespace Database\Factories;

use App\Models\Station;
use App\Models\WorkTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => fake()->name() ,
        //i have asked chatgpt for this syntax but i explained to him what must we do
        'parent_id' => Station::whereNull('parent_id')->exists()?fake()->optional(0.3)->randomElement(station::whereNull('parent_id')->pluck('id')->toArray()):null,
        'longitude' => fake()->randomFloat(6, -90, 90),
        'latitude' => fake()->randomFloat(6, -180, 180),
        'worktime_id' => WorkTime::inRandomOrder()->first()->id,
        ];
    }
}
