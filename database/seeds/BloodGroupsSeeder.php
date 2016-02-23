<?php

use Illuminate\Database\Seeder;

class BloodGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Delete data in blood groups table
        DB::table('blood_groups')->delete();

        //Insert data in blood groups table
        DB::table('blood_groups')->insert([
            ['blood_type' => 'A'],
            ['blood_type' => 'B'],
            ['blood_type' => 'AB'],
            ['blood_type' => 'O'],
        ]);
    }
}
