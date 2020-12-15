<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('si_movies', function (Blueprint $table) {
            //
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('lang');
            $table->unsignedBigInteger('quality');
            $table->string('file');
            $table->string('video_link');
            $table->string('trailer_link');
            $table->string('duration');
            $table->integer('releseDate');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('category')->references('id')->on('si_video_category');
            $table->foreign('lang')->references('id')->on('si_video_language');
            $table->foreign('quality')->references('id')->on('si_video_quality');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('si_movies');
        // Schema::table('si_movies', function (Blueprint $table) {
        //     //
        // });
    }
}
