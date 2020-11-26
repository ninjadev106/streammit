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
        // Video Quality Seed
        DB::table('si_video_quality')->insert([
            'name' => 'SD(480p)',   
        ]);
        DB::table('si_video_quality')->insert([
            'name' => 'HD(720p)',   
        ]);
        DB::table('si_video_quality')->insert([
            'name' => 'FHD(1080p)',      
        ]);

        // Video Category Seed
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

        // Video Language Seed
        DB::table('si_video_language')->insert([
            'name' => 'English',   
        ]);
        DB::table('si_video_language')->insert([
            'name' => 'Hindi',   
        ]);
        DB::table('si_video_language')->insert([
            'name' => 'Tamil',      
        ]);
        DB::table('si_video_language')->insert([
            'name' => 'Gujarati',      
        ]);

    }
}
