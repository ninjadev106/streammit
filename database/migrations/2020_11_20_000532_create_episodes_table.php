<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('si_episodes', function (Blueprint $table) {
            //
            $table->id();
            $table->integer('episode');
            $table->string('name');
            $table->unsignedBigInteger('show');
            $table->integer('season');
            $table->text('description');
            $table->string('file');
            $table->string('video_link');
            $table->string('duration');
            $table->dateTime('date');                        // 
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('show')->references('id')->on('si_shows')->onDelete('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('si_episodes');
        // Schema::table('si_episodes', function (Blueprint $table) {
        //     //
        // });
    }
}
