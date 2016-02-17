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
        //Deleting data in patients table
        DB::table('patients_details')->delete();

        //Patients to insert
        $patients_details = [
            ['patient_id' => '1', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '2', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '3', 'gender_id' => '2', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '4', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '5', 'gender_id' => '2', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '6', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '7', 'gender_id' => '2', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '8', 'gender_id' => '2', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '9', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '10', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '11', 'gender_id' => '2', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '12', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '13', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '14', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '15', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '16', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '17', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '18', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '19', 'gender_id' => '2', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
            ['patient_id' => '20', 'gender_id' => '1', 'status_id' => '1', 'birthday' => date('1992-02-23'), 'phone' => '0542435643', 'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana'],
        ];

        //Insert data in patients details table
        DB::table('patients_details')->insert($patients_details);
    }

}
