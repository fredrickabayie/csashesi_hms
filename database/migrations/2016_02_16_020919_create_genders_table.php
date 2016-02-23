<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create gender table in the database
        Schema::create('genders', function (Blueprint $table) {
            $table->increments('gender_id');
            $table->string('gender_type', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop gender table in the database
        Schema::drop('genders');
    }
}
