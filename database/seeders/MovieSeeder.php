<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_movies')->insert([
            'title' => 'Boop Bitty',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 8,
            'lang' => 1,
            'quality' => 2,
            'file' => 'tf1.jpg',
            'video_link' => 'tv1.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Burning',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 8,
            'lang' => 1,
            'quality' => 2,
            'file' => 'tf2.jpg',
            'video_link' => 'tv2.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Champions',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 7,
            'lang' => 1,
            'quality' => 3,
            'file' => 'tf3.jpg',
            'video_link' => 'tv3.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Dino Land',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 9,
            'lang' => 1,
            'quality' => 3,
            'file' => 'tf4.jpg',
            'video_link' => 'tv4.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Last Night',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 10,
            'lang' => 2,
            'quality' => 3,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
    }
}
