<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoQualitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_video_quality')->insert([
            'name' => 'SD(480p)',   
        ]);
        DB::table('si_video_quality')->insert([
            'name' => 'HD(720p)',   
        ]);
        DB::table('si_video_quality')->insert([
            'name' => 'FHD(1080p)',      
        ]);
        DB::table('si_video_quality')->insert([
            'name' => 'UHD(4K +)',      
        ]);
    }
}
