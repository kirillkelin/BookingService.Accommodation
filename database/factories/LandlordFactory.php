<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LandlordFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'accommodation_id' => Str::uuid(),
            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'login' => fake()->unique()->firstName,
            'email' => fake()->unique()->email,
            'phone' => fake()->unique()->phoneNumber,
        ];
    }

}
