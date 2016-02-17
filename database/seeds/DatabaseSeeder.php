<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(GenderTableSeeder::class);
//        $this->call(MaritalStatusTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
//        $this->call(UsersDetailsTableSeeder::class);
        $this->call(PatientsSeeder::class);
    }
}
