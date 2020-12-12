<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('si_comments', function (Blueprint $table) {
            //
            $table->id();
            $table->unsignedBigInteger('author');
            $table->text('description')->nullable();
            $table->string('content_type')->nullable();
            $table->integer('content_id')->nullable();
            $table->dateTime('date')->nullable();

            $table->foreign('author')->references('id')->on('si_users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('si_comments');
        // Schema::table('si_comments', function (Blueprint $table) {
        //     //
        // });
    }
}
