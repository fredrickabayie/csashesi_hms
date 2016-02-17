<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create patients details table in database
        Schema::create('patients_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('gender_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->date('birthday');
            $table->string('phone');
            $table->string('address');
            $table->text('summary')->nullable();
            $table->timestamps();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        //Drop patients details from the database
        Schema::drop('patients_details');
    }
}
