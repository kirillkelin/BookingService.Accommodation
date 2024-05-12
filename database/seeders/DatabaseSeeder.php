<?php

namespace Database\Seeders;

use App\Models\AccommodationCharacteristic;
use App\Models\Landlord;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        AccommodationCharacteristic::factory(3)->create();
        Landlord::factory(10)->create();
    }

}
