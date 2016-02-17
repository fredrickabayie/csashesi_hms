<?php

use Illuminate\Database\Seeder;
use Hms\PatientDetail;

class PatientsDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data in patients table
        PatientDetail::create([
            'patient_id' => '1',
            'gender_id' => '1',
            'status_id' => '1',
            'birthday' => date('1992-02-23'),
            'phone' => '0542688902',
            'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana',
        ]);
    }
}
