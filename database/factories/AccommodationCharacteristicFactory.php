<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccommodationCharacteristic>
 */
class AccommodationCharacteristicFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => '26290694-b2e7-43e6-9bac-9ff0e21ace91',
            'count_rooms' => fake()->numberBetween(1, 5),
            'total_area' => fake()->numberBetween(10, 100),
            'address' => fake()->unique()->address,
        ];
    }
}
