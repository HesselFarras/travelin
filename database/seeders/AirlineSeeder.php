<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Airline;

class AirlineSeeder extends Seeder
{
    public function run(): void
    {
        Airline::create(['name' => 'Garuda Indonesia', 'code' => 'GA', 'country' => 'Indonesia']);
        Airline::create(['name' => 'Lion Air', 'code' => 'JT', 'country' => 'Indonesia']);
        Airline::create(['name' => 'AirAsia', 'code' => 'AK', 'country' => 'Malaysia']);
        Airline::create(['name' => 'Citilink', 'code' => 'CT', 'country' => 'Malaysia']);
    }
}
