<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_main_carousel_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_main_carousel_content')->insert([
            'content_type' => 'show',
            'content_id' => 1
        ]);
        DB::table('si_main_carousel_content')->insert([
            'content_type' => 'movie',
            'content_id' => 3
        ]);
        DB::table('si_movie_carousel_content')->insert([
            'content_type' => 'movie',
            'content_id' => 4
        ]);
        DB::table('si_movie_carousel_content')->insert([
            'content_type' => 'movie',
            'content_id' => 3
        ]);
        DB::table('si_movie_carousel_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_show_carousel_content')->insert([
            'content_type' => 'show',
            'content_id' => 3
        ]);
        DB::table('si_show_carousel_content')->insert([
            'content_type' => 'show',
            'content_id' => 2
        ]);
        DB::table('si_show_carousel_content')->insert([
            'content_type' => 'show',
            'content_id' => 4
        ]);
        DB::table('si_movie_section1_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_movie_section1_content')->insert([
            'content_type' => 'movie',
            'content_id' => 1
        ]);
        DB::table('si_movie_section1_content')->insert([
            'content_type' => 'movie',
            'content_id' => 4
        ]);
        DB::table('si_movie_section1_content')->insert([
            'content_type' => 'movie',
            'content_id' => 5
        ]);
        DB::table('si_movie_section2_content')->insert([
            'content_type' => 'movie',
            'content_id' => 6
        ]);
        DB::table('si_movie_section2_content')->insert([
            'content_type' => 'movie',
            'content_id' => 7
        ]);
        DB::table('si_movie_section2_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_movie_section2_content')->insert([
            'content_type' => 'movie',
            'content_id' => 9
        ]);
        DB::table('si_movie_section2_content')->insert([
            'content_type' => 'movie',
            'content_id' => 3
        ]);
        DB::table('si_movie_section3_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_movie_section3_content')->insert([
            'content_type' => 'movie',
            'content_id' => 5
        ]);
        DB::table('si_movie_section3_content')->insert([
            'content_type' => 'movie',
            'content_id' => 7
        ]);
        DB::table('si_movie_section3_content')->insert([
            'content_type' => 'movie',
            'content_id' => 1
        ]);
        DB::table('si_show_section1_content')->insert([
            'content_type' => 'show',
            'content_id' => 4
        ]);
        
        DB::table('si_show_section1_content')->insert([
            'content_type' => 'show',
            'content_id' => 2
        ]);
        DB::table('si_show_section1_content')->insert([
            'content_type' => 'show',
            'content_id' => 5
        ]);
        DB::table('si_show_section1_content')->insert([
            'content_type' => 'show',
            'content_id' => 3
        ]);
        DB::table('si_show_section2_content')->insert([
            'content_type' => 'show',
            'content_id' => 1
        ]);
        DB::table('si_show_section2_content')->insert([
            'content_type' => 'show',
            'content_id' => 3
        ]);
        DB::table('si_show_section2_content')->insert([
            'content_type' => 'show',
            'content_id' => 2
        ]);
        DB::table('si_show_section2_content')->insert([
            'content_type' => 'show',
            'content_id' => 4
        ]);
        DB::table('si_show_section3_content')->insert([
            'content_type' => 'show',
            'content_id' => 6
        ]);
        DB::table('si_show_section3_content')->insert([
            'content_type' => 'show',
            'content_id' => 2
        ]);
        DB::table('si_show_section3_content')->insert([
            'content_type' => 'show',
            'content_id' => 3
        ]);
        DB::table('si_show_section3_content')->insert([
            'content_type' => 'show',
            'content_id' => 5
        ]);

        DB::table('si_favorite_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_favorite_content')->insert([
            'content_type' => 'movie',
            'content_id' => 1
        ]);
        DB::table('si_favorite_content')->insert([
            'content_type' => 'movie',
            'content_id' => 5
        ]);
        DB::table('si_favorite_content')->insert([
            'content_type' => 'movie',
            'content_id' => 4
        ]);
        DB::table('si_favorite_content')->insert([
            'content_type' => 'movie',
            'content_id' => 8
        ]);

        DB::table('si_upcoming_content')->insert([
            'content_type' => 'movie',
            'content_id' => 3
        ]);
        DB::table('si_upcoming_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_upcoming_content')->insert([
            'content_type' => 'movie',
            'content_id' => 5
        ]);
        DB::table('si_upcoming_content')->insert([
            'content_type' => 'movie',
            'content_id' => 6
        ]);
        DB::table('si_upcoming_content')->insert([
            'content_type' => 'movie',
            'content_id' => 1
        ]);

        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 1
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 3
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 4
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 5
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 6
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 7
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 8
        ]);
        DB::table('si_topten_content')->insert([
            'content_type' => 'movie',
            'content_id' => 9
        ]);

        DB::table('si_suggest_content')->insert([
            'content_type' => 'movie',
            'content_id' => 4
        ]);
        DB::table('si_suggest_content')->insert([
            'content_type' => 'movie',
            'content_id' => 5
        ]);
        DB::table('si_suggest_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_suggest_content')->insert([
            'content_type' => 'movie',
            'content_id' => 7
        ]);

        DB::table('si_trending_content')->insert([
            'content_type' => 'show',
            'content_id' => 1
        ]);
        DB::table('si_trending_content')->insert([
            'content_type' => 'show',
            'content_id' => 3
        ]);
        DB::table('si_trending_content')->insert([
            'content_type' => 'show',
            'content_id' => 5
        ]);
        DB::table('si_trending_content')->insert([
            'content_type' => 'show',
            'content_id' => 2
        ]);
        DB::table('si_trending_content')->insert([
            'content_type' => 'show',
            'content_id' => 6
        ]);
        DB::table('si_trending_content')->insert([
            'content_type' => 'show',
            'content_id' => 4
        ]);


        DB::table('si_onyx_original_content')->insert([
            'content_type' => 'movie',
            'content_id' => 4
        ]);
        DB::table('si_onyx_original_content')->insert([
            'content_type' => 'movie',
            'content_id' => 2
        ]);
        DB::table('si_onyx_original_content')->insert([
            'content_type' => 'movie',
            'content_id' => 1
        ]);
        DB::table('si_onyx_original_content')->insert([
            'content_type' => 'movie',
            'content_id' => 6
        ]);
        DB::table('si_onyx_original_content')->insert([
            'content_type' => 'movie',
            'content_id' => 8
        ]);
    }
}
