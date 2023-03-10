<?php

namespace Database\Seeders;

use App\Models\Car;
use Database\Factories\CarsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::factory()->count(10)->create();
    }
}
