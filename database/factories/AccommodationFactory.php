<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AccommodationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'description' => $this->faker->text,
            'price' => $this->faker->numberBetween(10, 500),
            'status' => $this->faker->numberBetween(0, 1),
            'characteristics_id' => '26290694-b2e7-43e6-9bac-9ff0e21ace91',
            'tenant_id' => Str::uuid(),
        ];
    }

}
