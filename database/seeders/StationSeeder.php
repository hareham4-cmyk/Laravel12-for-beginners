<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Station::factory()->count(5)->create(['parent_id' => null]);
        Station::factory()->count(50)->create();
    }
}
