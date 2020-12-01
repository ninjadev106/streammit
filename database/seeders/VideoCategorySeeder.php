<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_video_category')->insert([
            'name' => 'Drama',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',
            'status' => 0,
        ]);
        DB::table('si_video_category')->insert([
            'name' => 'Action',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',
            'status' => 0,
        ]);
        DB::table('si_video_category')->insert([
            'name' => 'Horror',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',
            'status' => 0,
        ]);
        DB::table('si_video_category')->insert([
            'name' => 'Thriller',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rhoncus non elit a scelerisque. Etiam feugiat luctus est, vel commodo odio rhoncus sit amet',
            'status' => 0,
        ]);
    }
}
