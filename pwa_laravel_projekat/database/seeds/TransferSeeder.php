<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfers')->insert([
            ['player_id' => '1', 'team_id_from'=>'3', 'team_id_to'=>'1', 'date'=>date_create("2018-03-15"), 'money'=>'3050000'],
            ['player_id' => '2', 'team_id_from'=>'4', 'team_id_to'=>'1', 'date'=>date_create("2019-04-21"), 'money'=>'10050000'],
            ['player_id' => '3', 'team_id_from'=>'5', 'team_id_to'=>'1', 'date'=>date_create("2019-07-05"), 'money'=>'3050000'],

            ['player_id' => '6', 'team_id_from'=>'7', 'team_id_to'=>'2', 'date'=>date_create("2019-07-05"), 'money'=>'4050000'],
            ['player_id' => '7', 'team_id_from'=>'8', 'team_id_to'=>'2', 'date'=>date_create("2019-07-05"), 'money'=>'5250000'],
            ['player_id' => '8', 'team_id_from'=>'9', 'team_id_to'=>'2', 'date'=>date_create("2019-07-05"), 'money'=>'3058000'],

            ['player_id' => '12', 'team_id_from'=>'1', 'team_id_to'=>'3', 'date'=>date_create("2019-07-05"), 'money'=>'1050000'],
            ['player_id' => '17', 'team_id_from'=>'2', 'team_id_to'=>'4', 'date'=>date_create("2019-07-05"), 'money'=>'8550000'],
            ['player_id' => '22', 'team_id_from'=>'1', 'team_id_to'=>'5', 'date'=>date_create("2019-07-05"), 'money'=>'7550000'],

            ['player_id' => '27', 'team_id_from'=>'2', 'team_id_to'=>'6', 'date'=>date_create("2019-07-05"), 'money'=>'2100000'],
            ['player_id' => '31', 'team_id_from'=>'6', 'team_id_to'=>'7', 'date'=>date_create("2019-07-05"), 'money'=>'3080000'],
            ['player_id' => '37', 'team_id_from'=>'6', 'team_id_to'=>'8', 'date'=>date_create("2019-07-05"), 'money'=>'3059000'],

            ['player_id' => '42', 'team_id_from'=>'10', 'team_id_to'=>'9', 'date'=>date_create("2019-07-05"), 'money'=>'1230000'],
            ['player_id' => '46', 'team_id_from'=>'8', 'team_id_to'=>'10', 'date'=>date_create("2019-07-05"), 'money'=>'3089000'],
            ['player_id' => '48', 'team_id_from'=>'9', 'team_id_to'=>'10', 'date'=>date_create("2019-07-05"), 'money'=>'9400000'],
        ]);

    }
}

