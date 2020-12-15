<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('si_shows', function (Blueprint $table) {
            //
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('lang');
            $table->unsignedBigInteger('quality');
            $table->string('file');
            $table->string('banner');
            $table->string('trailer_link');
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
        Schema::dropIfExists('si_shows');
        // Schema::table('si_shows', function (Blueprint $table) {
        //     //
        // });
    }
}
