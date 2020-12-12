<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_users')->insert([
            'name' => 'Aristo',
            'email' => 'aristo@gmail.com',
            'password' => Hash::make('thunder'),
            'lang' => 'English',
            'joinDate' => '2020-11-15',
            'status' => 1
        ]);
        DB::table('si_users_profiles')->insert([
            'user_id' => 1,
            'firstName' => 'Aristo',
            'lastName' => 'Telles',
            'image' => 'uploads/images/users/01.jpg',
            'city' => 'atlanta',
            'gender' => 'male',
            'birthDate' => date('Y-m-d'),
            'martial' => 'single',
            'country' => 1,
            'state' => 2,
            'address' => 'Linden Street No3',
            'mobileNo' => '1234455678'
        ]);
    }
}
