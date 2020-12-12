<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_state')->insert([
            'name' => 'California',   
        ]);
        DB::table('si_state')->insert([
            'name' => 'Florida',   
        ]);
        DB::table('si_state')->insert([
            'name' => 'Georgia',      
        ]);
        DB::table('si_state')->insert([
            'name' => 'Connecticut',      
        ]);
        DB::table('si_state')->insert([
            'name' => 'Louisiana',      
        ]);
    }
}
