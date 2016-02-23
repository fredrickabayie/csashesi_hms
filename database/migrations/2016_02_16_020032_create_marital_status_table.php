<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaritalStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create marital status table in the database
        Schema::create('marital_status', function (Blueprint $table) {
            $table->increments('status_id');
            $table->string('status_type', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Drop marital_status table in the database
        Schema::drop('marital_status');
    }
}
