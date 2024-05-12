<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LandlordFactory extends Factory
{
    public function definition(): array
    {
        static $i = 0;

        return [
            'accommodation_id' => $i++,
            'last_name' => fake()->lastName,
            'first_name' => fake()->firstName,
            'login' => fake()->unique()->firstName,
            'email' => fake()->unique()->email,
            'phone' => fake()->unique()->phoneNumber,
        ];
    }

}
