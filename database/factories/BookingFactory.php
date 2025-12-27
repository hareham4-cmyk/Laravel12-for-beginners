<?php

namespace Database\Factories;

use App\Models\Station;
use App\Models\User;
use App\Models\WashingType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'station_id' =>  Station::inRandomOrder()->first()->id,
            'washing_type_id' => WashingType::inRandomOrder()->first()->id,
            'status' => fake()->randomElement(['pending', 'confirmed', 'rejected' , 'cancelled']),
        ];
    }
}
