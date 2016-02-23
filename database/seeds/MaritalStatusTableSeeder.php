<?php

use Illuminate\Database\Seeder;

class MaritalStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Delete data in marital status table
        DB::table('marital_status')->delete();

        //Insert data in martial status table
        DB::table('marital_status')->insert([
            ['status_type' => 'Single'],
            ['status_type' => 'Married']
        ]);
    }
}
