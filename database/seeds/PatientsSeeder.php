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
        //Deleting data in patients table
        DB::table('patients')->delete();

        //Patients to insert
        $patients = [
            ['name' => 'Sheamus Punch', 'email' => 'sheamus.punch@ashesi.edu.gh'],
            ['name' => 'Samuel Agyemang', 'email' => 'samuel.agyemang@ashesi.edu.gh'],
            ['name' => 'Dorcas Tamatey', 'email' => 'dorcas.tamatey@ashesi.edu.gh'],
            ['name' => 'Jude Norvor', 'email' => 'jude.norvor@ashesi.edu.gh'],
            ['name' => 'Lydia Kemuma', 'email' => 'lydia.kemuma@ashesi.edu.gh'],
            ['name' => 'David Tandoh', 'email' => 'david.tantoh@ashesi.edu.gh'],
            ['name' => 'Agatha Maison', 'email' => 'agatha.maison@ashesi.edu.gh'],
            ['name' => 'Julateh Kpannah', 'email' => 'julateh.kpannah@ashesi.edu.gh'],
            ['name' => 'Obed Nsiah', 'email' => 'obed.nsiah@ashesi.edu.gh'],
            ['name' => 'Anthony Kafui', 'email' => 'anthony.kafui@ashesi.edu.gh'],
            ['name' => 'Dorothy Sarpong', 'email' => 'dorothy.sarpong@ashesi.edu.gh'],
            ['name' => 'Makafui Amezah', 'email' => 'makafui.amezah@ashesi.edu.gh'],
            ['name' => 'John Vianne', 'email' => 'john.vianne@ashesi.edu.gh'],
            ['name' => 'Festus Jartu', 'email' => 'festus.jartu@ashesi.edu.gh'],
            ['name' => 'Michael Annor', 'email' => 'michael.annor@ashesi.edu.gh'],
            ['name' => 'Christian Bogart', 'email' => 'christian.bogart@ashesi.edu.gh'],
            ['name' => 'Benson Wachira', 'email' => 'benson.wachira@ashesi.edu.gh'],
            ['name' => 'George Assan', 'email' => 'george.assan@ashesi.edu.gh'],
            ['name' => 'Rahab Wangari', 'email' => 'rahab.wangari@ashesi.edu.gh'],
            ['name' => 'Salifu Mutaru', 'email' => 'salifu.mutaru@ashesi.edu.gh'],
        ];

        //Insert data in patients table
        DB::table('patients')->insert($patients);
    }
}
