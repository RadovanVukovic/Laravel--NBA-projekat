<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            ['name' => 'Plejmejker'],
            ['name' => 'Bek suter'],
            ['name' => 'Krilo'],
            ['name' => 'Krilni centar'],
            ['name' => 'Centar'],


        ]);
    }
}
