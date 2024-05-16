<?php

namespace Database\Seeders;

use App\Models\Accommodation;
use App\Models\AccommodationCharacteristic;
use App\Models\Landlord;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Accommodation::factory(10)->create();
        AccommodationCharacteristic::factory(1)->create();
        Landlord::factory(10)->create();
    }

}
