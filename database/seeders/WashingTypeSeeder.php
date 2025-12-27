<?php

namespace Database\Seeders;

use App\Models\WashingType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WashingTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         WashingType::factory()->count(50)->create();    }
}
