<?php

use Illuminate\Database\Seeder;
use Hms\Patient;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data in patients table
        Patient::create([
            'name' => 'Samuel Agyemang',
            'email' => 'samuel.agyemang@ashesi.edu.gh'
        ]);
    }
}
