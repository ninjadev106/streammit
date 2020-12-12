<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Showseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_shows')->insert([
            'title' => 'OPPOSITE ATTRACT',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 1,
            'lang' => 1,
            'quality' => 2,
            'file' => 'tf1.jpg',
            'banner' => 'tf1.jpg',
        ]);
        DB::table('si_shows')->insert([
            'title' => 'THE MARSHAL KING',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 1,
            'lang' => 1,
            'quality' => 3,
            'file' => 'tf2.jpg',
            'banner' => 'tf5.jpg',
        ]);
        DB::table('si_shows')->insert([
            'title' => 'DARK ZONE',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 1,
            'lang' => 2,
            'quality' => 2,
            'file' => 'tf3.jpg',
            'banner' => 'tf5.jpg',
        ]);
        DB::table('si_shows')->insert([
            'title' => 'FIRE STORM',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 2,
            'lang' => 2,
            'quality' => 1,
            'file' => 'tf4.jpg',
            'banner' => 'tf5.jpg',
        ]);
        DB::table('si_shows')->insert([
            'title' => 'THE HERO CHAMP',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 2,
            'lang' => 2,
            'quality' => 4,
            'file' => 'tf5.jpg',
            'banner' => 'tf5.jpg',
        ]);
        DB::table('si_shows')->insert([
            'title' => 'THE APARTMENT',
            'description' => 'Lorem ipsum dolor sit amet',
            'category' => 2,
            'lang' => 3,
            'quality' => 3,
            'file' => 'tf5.jpg',
            'banner' => 'tf5.jpg',
        ]);
    }
}
