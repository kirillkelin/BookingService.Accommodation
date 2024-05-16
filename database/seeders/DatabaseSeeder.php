<?php

namespace Database\Seeders;

use App\Models\Accommodation;
use App\Models\AccommodationCharacteristic;
use App\Models\Landlord;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Accommodation::factory()->create([
            'id' => 'f5793adb-29f9-41ac-87a5-4bda51b61383',
            'status' => false,
        ]);
        Landlord::factory(1)->create([
            'id' => '1e0c5ca0-0173-4287-b72d-d8faddccd892',
            'accommodation_id' => 'f5793adb-29f9-41ac-87a5-4bda51b61383',
        ]);

        $uuidFirst = Str::uuid()->toString();
        Accommodation::factory(1)->create([
            'id' => $uuidFirst,
        ]);
        Landlord::factory(1)->create([
            'accommodation_id' => $uuidFirst,
        ]);

        $uuidSecond = Str::uuid()->toString();
        Accommodation::factory(1)->create([
            'id' => $uuidSecond,
        ]);
        Landlord::factory(1)->create([
            'accommodation_id' => $uuidSecond,
        ]);

        $uuidThird = Str::uuid()->toString();
        Accommodation::factory(1)->create([
            'id' => $uuidThird,
        ]);
        Landlord::factory(1)->create([
            'accommodation_id' => $uuidThird,
        ]);

        AccommodationCharacteristic::factory(1)->create();
    }

}
