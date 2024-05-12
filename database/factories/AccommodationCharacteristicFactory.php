<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccommodationCharacteristic>
 */
class AccommodationCharacteristicFactory extends Factory
{
    public function definition(): array
    {
        return [
            'count_rooms' => fake()->numberBetween(1, 5),
            'total_area' => fake()->numberBetween(10, 100),
            'address' => fake()->unique()->address,
        ];
    }
}
