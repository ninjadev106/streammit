<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('si_membership', function (Blueprint $table) {
            //
            $table->id();
            $table->string('name');
            $table->integer('feePerMonth');
            $table->integer('enbNewMovie');
            $table->integer('enbStreamitSpecial');
            $table->integer('enbAmericanTvShows');
            $table->integer('enbHollywoodMovies');
            $table->unsignedBigInteger('videoQuality');
            $table->integer('enbAdFreeEntertainment');
            $table->timestamps();

            $table->foreign('videoQuality')->references('id')->on('si_video_quality');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('si_membership');
        // Schema::table('si_membership', function (Blueprint $table) {
        //     //
        // });
    }
}
