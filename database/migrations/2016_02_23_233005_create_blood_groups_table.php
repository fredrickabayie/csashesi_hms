<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create blood group table in database
        Schema::create('blood_groups', function (Blueprint $table) {
            $table->increments('blood_id');
            $table->string('blood_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop blood group from the database
        Schema::drop('blood_groups');
    }
}
