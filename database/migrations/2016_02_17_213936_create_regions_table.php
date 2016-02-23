<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create regions table in database
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('region_id');
            $table->string('region_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop regions from the database
        Schema::drop('regions');
    }
}
