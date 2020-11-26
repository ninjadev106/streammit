<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_roles')->insert([
            'name' => 'Front-end customer',
            'slug' => 'customer'
        ]);
        DB::table('si_roles')->insert([
            'name' => 'Back-end administrator',
            'slug' => 'admin'
        ]);
    }
}
