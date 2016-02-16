<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create users details table in database
        Schema::create('users_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->date('birthday');
            $table->string('phone');
            $table->string('address');
            $table->text('summary')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('gender_id')->references('gender_id')->on('genders');
            $table->foreign('status_id')->references('status_id')->on('marital_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop users details table from database
        Schema::drop('users_details');
    }
}
