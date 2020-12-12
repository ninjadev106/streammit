<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_membership')->insert([
            'name' => 'Free Trial',
            'feePerMonth' => 0,
            'multiLoginCount' => 1,
            'unLimitContent' => 1,
            'enbAllDevice' => 0,
            'enbHDQuality' => 0,
            'enbUHDQuality' => 0,
        ]);
        // DB::table('si_membership')->insert([
        //     'name' => 'Basic',
        //     'feePerMonth' => 4.99,
        //     'multiLoginCount' => 1,
        //     'unLimitContent' => 1,
        //     'enbAllDevice' => 1,
        //     'enbHDQuality' => 0,
        //     'enbUHDQuality' => 0,
        // ]);
        // DB::table('si_membership')->insert([
        //     'name' => 'Standard',
        //     'feePerMonth' => 6.99,
        //     'multiLoginCount' => 2,
        //     'unLimitContent' => 1,
        //     'enbAllDevice' => 1,
        //     'enbHDQuality' => 1,
        //     'enbUHDQuality' => 0,
        // ]);
        // DB::table('si_membership')->insert([
        //     'name' => 'Premium',
        //     'feePerMonth' => 9.99,
        //     'multiLoginCount' => 4,
        //     'unLimitContent' => 1,
        //     'enbAllDevice' => 1,
        //     'enbHDQuality' => 1,
        //     'enbUHDQuality' => 1,
        // ]);
    }
}
