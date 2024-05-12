<?php

namespace Database\Seeders;

use App\Models\Landlord;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Landlord::factory(10)->create();
    }

}
