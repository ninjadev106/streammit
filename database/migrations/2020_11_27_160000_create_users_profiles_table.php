<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('si_users_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('image')->nullable();
            $table->string('city')->nullable();
            $table->string('gender')->nullable();
            $table->dateTime('birthDate')->nullable();
            $table->string('marital')->nullable();
            $table->unsignedBigInteger('country')->nullable();
            $table->unsignedBigInteger('state')->nullable();
            $table->string('address')->nullable();
            $table->integer('mobileNo')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('si_users')->onDelete('cascade');
            $table->foreign('country')->references('id')->on('si_country');
            $table->foreign('state')->references('id')->on('si_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('si_users_profiles');
    }
}
