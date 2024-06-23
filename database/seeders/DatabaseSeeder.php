<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            StateSeeder::class,
            SenatorialDistrictSeeder::class,
            FederalConstituencySeeder::class,
            LgaSeeder::class,
            WardSeeder::class,
            PollingUnitSeeder::class,
            UserSeeder::class, // Add this line
        ]);
    }
}
