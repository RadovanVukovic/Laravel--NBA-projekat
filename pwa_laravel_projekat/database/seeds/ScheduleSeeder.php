<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule')->insert([
            ['team_id_home'=>'2', 'team_id_away'=>'1', 'date'=>'2020-05-07','time'=>'21:00' , 'stadium_id'=>'2'],
            ['team_id_home'=>'4', 'team_id_away'=>'3', 'date'=>'2020-07-08','time'=>'22:00' , 'stadium_id'=>'4'],
            ['team_id_home'=>'6', 'team_id_away'=>'5', 'date'=>'2020-05-06','time'=>'20:00' , 'stadium_id'=>'6'],
            ['team_id_home'=>'8', 'team_id_away'=>'7', 'date'=>'2020-05-09','time'=>'18:00' , 'stadium_id'=>'8'],

            ['team_id_home'=>'9', 'team_id_away'=>'10', 'date'=>'2020-08-08','time'=>'20:00' , 'stadium_id'=>'9'],
            ['team_id_home'=>'2', 'team_id_away'=>'1', 'date'=>'2020-07-12','time'=>'21:00' , 'stadium_id'=>'2'],
            ['team_id_home'=>'4', 'team_id_away'=>'3', 'date'=>'2020-06-08','time'=>'22:00' , 'stadium_id'=>'4'],
            ['team_id_home'=>'6', 'team_id_away'=>'5', 'date'=>'2020-10-06','time'=>'20:00' , 'stadium_id'=>'6'],
            ['team_id_home'=>'8', 'team_id_away'=>'7', 'date'=>'2020-06-21','time'=>'18:00' , 'stadium_id'=>'8'],

            ['team_id_home'=>'9', 'team_id_away'=>'10', 'date'=>'2020-05-18','time'=>'20:00' , 'stadium_id'=>'9'],
            ['team_id_home'=>'2', 'team_id_away'=>'1', 'date'=>'2020-08-07','time'=>'21:00' , 'stadium_id'=>'2'],
            ['team_id_home'=>'4', 'team_id_away'=>'3', 'date'=>'2020-07-15','time'=>'22:00' , 'stadium_id'=>'4'],
            ['team_id_home'=>'6', 'team_id_away'=>'5', 'date'=>'2020-07-26','time'=>'20:00' , 'stadium_id'=>'6'],
            ['team_id_home'=>'8', 'team_id_away'=>'7', 'date'=>'2020-08-09','time'=>'18:00' , 'stadium_id'=>'8'],
        ]);
    }
}
