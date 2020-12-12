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
            'category' => 1,
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
            'category' => 2,
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
            'category' => 1,
            'lang' => 3,
            'quality' => 1,
            'file' => 'tf3.jpg',
            'video_link' => 'tv3.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Dino Land',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 4,
            'lang' => 2,
            'quality' => 3,
            'file' => 'tf4.jpg',
            'video_link' => 'tv4.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Last Night',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 2,
            'lang' => 3,
            'quality' => 1,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Last Race',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 3,
            'lang' => 3,
            'quality' => 2,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Last Breath',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 2,
            'lang' => 1,
            'quality' => 3,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Beyond War',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 2,
            'lang' => 1,
            'quality' => 4,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Open Dead Shot',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 4,
            'lang' => 1,
            'quality' => 1,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'Arrival 1999',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 4,
            'lang' => 2,
            'quality' => 4,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
        DB::table('si_movies')->insert([
            'title' => 'My True Freinds',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 2,
            'lang' => 1,
            'quality' => 2,
            'file' => 'tf5.jpg',
            'video_link' => 'tv5.mp4',
            'duration' => '2h 57m',
            'releseDate' => 2020,
        ]);
    }
}
