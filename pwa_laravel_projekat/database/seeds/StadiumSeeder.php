<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StadiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->insert([
            ['name' => 'Staples Center', 'city'=>'Los Angeles', 'capacity'=>'18997'],
            ['name' => 'State Farm Arena', 'city'=>'Atlanta', 'capacity'=>'19580'],
            ['name' => 'TD Garden', 'city'=>'Boston', 'capacity'=>'22000'],
            ['name' => 'Chase Center', 'city'=>'San Francisco', 'capacity'=>'21500'],
            ['name' => 'Rocket Mortgage FieldHouse', 'city'=>'Cleveland', 'capacity'=>'20000'],
            ['name' => 'AmericanAirlines Arena', 'city'=>'Miami', 'capacity'=>'23000'],
            ['name' => 'United Center', 'city'=>'Chicago', 'capacity'=>'21700'],
            ['name' => 'Pepsi Center', 'city'=>'Denver', 'capacity'=>'24000'],
            ['name' => 'Toyota Center', 'city'=>'Houston', 'capacity'=>'22000'],
            ['name' => 'Golden 1 Center', 'city'=>'Sacramento', 'capacity'=>'25000'],



        ]);
    }
}

