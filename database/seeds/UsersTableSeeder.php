<?php

use Illuminate\Database\Seeder;
use Hms\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data in users table
        User::create([
            'name' => 'Fredrick Abayie',
            'email' => 'fredrick.abayie@ashesi.edu.gh',
            'password' => bcrypt('csashesi_hms')
        ]);
    }
}
