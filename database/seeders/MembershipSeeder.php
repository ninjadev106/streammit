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
            'name' => 'Basic',
            'feePerMonth' => 19,
            'enbNewMovie' => 1,
            'enbStreamitSpecial' => 0,
            'enbAmericanTvShows' => 0,
            'enbHollywoodMovies' => 1,
            'videoQuality' => 1,
            'enbAdFreeEntertainment' => 0,
        ]);
        DB::table('si_membership')->insert([
            'name' => 'Standard',
            'feePerMonth' => 39,
            'enbNewMovie' => 1,
            'enbStreamitSpecial' => 1,
            'enbAmericanTvShows' => 1,
            'enbHollywoodMovies' => 1,
            'videoQuality' => 2,
            'enbAdFreeEntertainment' => 0,
        ]);
        DB::table('si_membership')->insert([
            'name' => 'Platinum',
            'feePerMonth' => 119,
            'enbNewMovie' => 1,
            'enbStreamitSpecial' => 1,
            'enbAmericanTvShows' => 1,
            'enbHollywoodMovies' => 1,
            'videoQuality' => 3,
            'enbAdFreeEntertainment' => 1,
        ]);
        DB::table('si_membership')->insert([
            'name' => 'Premium',
            'feePerMonth' => 219,
            'enbNewMovie' => 1,
            'enbStreamitSpecial' => 1,
            'enbAmericanTvShows' => 1,
            'enbHollywoodMovies' => 1,
            'videoQuality' => 3,
            'enbAdFreeEntertainment' => 1,
        ]);
    }
}
