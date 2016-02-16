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
            'name' => 'Kenneth Mensah',
            'email' => 'kenneth.mensah@ashesi.edu.gh',
            'password' => bcrypt('csashesi_')
        ]);
    }
}
