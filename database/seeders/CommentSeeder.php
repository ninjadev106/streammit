<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('si_comments')->insert([
            'author' => 1,
            'description' => '<p>Brief Speeches :</p><ul><li>text1: Awesome</li><li>text2: Wonderful</li><li>text3: Fantastic</li><li>text4: 25 Marvellous</li><li>text5: Surprise</li><li>text6: So exciting</li></ul><p><br></p>',
            'content_type' => 'movie',
            'content_id' => 1,
            'date' => '2020-11-16'   
        ]);
        DB::table('si_comments')->insert([
            'author' => 1,
            'description' => '<p>Brief Speeches :</p><ul><li>text1: Awesome</li><li>text2: Wonderful</li><li>text3: Fantastic</li><li>text4: 25 Marvellous</li><li>text5: Surprise</li><li>text6: So exciting</li></ul><p><br></p>',
            'content_type' => 'movie',
            'content_id' => 2,
            'date' => '2020-11-16'   
        ]);
        DB::table('si_comments')->insert([
            'author' => 1,
            'description' => '<p>Brief Speeches :</p><ul><li>text1: Awesome</li><li>text2: Wonderful</li><li>text3: Fantastic</li><li>text4: 25 Marvellous</li><li>text5: Surprise</li><li>text6: So exciting</li></ul><p><br></p>',
            'content_type' => 'movie',
            'content_id' => 3,
            'date' => '2020-11-16'   
        ]);
        DB::table('si_comments')->insert([
            'author' => 1,
            'description' => '<p>Brief Speeches :</p><ul><li>text1: Awesome</li><li>text2: Wonderful</li><li>text3: Fantastic</li><li>text4: 25 Marvellous</li><li>text5: Surprise</li><li>text6: So exciting</li></ul><p><br></p>',
            'content_type' => 'episode',
            'content_id' => 1,
            'date' => '2020-11-16'   
        ]);
        DB::table('si_comments')->insert([
            'author' => 1,
            'description' => '<p>Brief Speeches :</p><ul><li>text1: Awesome</li><li>text2: Wonderful</li><li>text3: Fantastic</li><li>text4: 25 Marvellous</li><li>text5: Surprise</li><li>text6: So exciting</li></ul><p><br></p>',
            'content_type' => 'episode',
            'content_id' => 2,
            'date' => '2020-11-16'   
        ]);
    }
}
