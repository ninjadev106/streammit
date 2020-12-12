<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BasicDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            VideoCategorySeeder::class,
            VideoLanguageSeeder::class,
            VideoQualitySeeder::class,
        ]);
    }
}
