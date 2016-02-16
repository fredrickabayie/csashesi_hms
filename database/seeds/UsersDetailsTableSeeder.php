<?php

use Illuminate\Database\Seeder;
use Hms\UserDetail;

class UsersDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert data in users table
        UserDetail::create([
            'user_id' => '1',
            'gender_id' => '1',
            'status_id' => '1',
            'birthday' => '1992/10/110',
            'phone' => '0209339957',
            'address' => '1 University Avenue, PMB CT3, Cantonments, Accra Ghana',
            'summary' => 'A passionate worker who puts patients needs first before others. Life is precious.',
        ]);
    }
}
