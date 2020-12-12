<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_country')->insert([
            'name' => 'Caneda',   
        ]);
        DB::table('si_country')->insert([
            'name' => 'Noida',   
        ]);
        DB::table('si_country')->insert([
            'name' => 'USA',      
        ]);
        DB::table('si_country')->insert([
            'name' => 'India',      
        ]);
        DB::table('si_country')->insert([
            'name' => 'Africa',
        ]);
    }
}
