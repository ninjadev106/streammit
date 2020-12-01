<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
