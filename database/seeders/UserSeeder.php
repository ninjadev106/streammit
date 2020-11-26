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
            'mobileNo' => '12345678',
            'gender' => 'male',
            'country' => 'India',
            'lang' => 'English',
            'profileImage' => 'uploads/images/users/01.jpg',
            'birthDate' => '1988-08-08',
            'joinDate' => '2020-11-15',
            'status' => 1
        ]);
    }
}
