<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Delete data in genders table
        DB::table('genders')->delete();

        //Insert data in genders table
        DB::table('genders')->insert([
            ['gender_type' => '1'],
            ['gender_type' => '2'],
            ['gender_type' => '3']
        ]);
    }
}