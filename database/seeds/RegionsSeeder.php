<?php

use Illuminate\Database\Seeder;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Delete data in regions table
        DB::table('regions')->delete();

        //Insert data in regions table
        DB::table('regions')->insert([
            ['region_name' => 'Central'],
            ['region_name' => 'Western'],
            ['region_name' => 'Ashanti'],
            ['region_name' => 'Volta'],
            ['region_name' => 'Eastern'],
            ['region_name' => 'Brong-Ahafo'],
            ['region_name' => 'Upper East'],
            ['region_name' => 'Upper West'],
            ['region_name' => 'Greater Accra'],
        ]);
    }
}