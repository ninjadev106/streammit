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
            $table->float('feePerMonth');
            $table->integer('multiLoginCount');
            $table->integer('unLimitContent');
            $table->integer('enbAllDevice');
            $table->integer('enbHDQuality');
            $table->integer('enbUHDQuality');
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
        Schema::dropIfExists('si_membership');
        // Schema::table('si_membership', function (Blueprint $table) {
        //     //
        // });
    }
}
