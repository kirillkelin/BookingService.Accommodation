<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AccommodationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => fake()->text,
            'price' => fake()->numberBetween(10, 500),
            'status' => fake()->numberBetween(0, 1),
            'characteristics_id' => fake()->numberBetween(0, 5),
            'tenant_id' => fake()->numberBetween(0, 5),
        ];
    }
}
