<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            ['team_id_home'=>'1', 'team_id_away'=>'2', 'date'=>'2020-05-05', 'time'=>'20:00' , 'stadium_id'=>'1', 'points_home'=>'92', 'points_away'=>'78'],
            ['team_id_home'=>'3', 'team_id_away'=>'4', 'date'=>'2020-05-07', 'time'=>'18:00' , 'stadium_id'=>'3', 'points_home'=>'101', 'points_away'=>'99'],
            ['team_id_home'=>'5', 'team_id_away'=>'6', 'date'=>'2020-05-08', 'time'=>'21:00' , 'stadium_id'=>'5', 'points_home'=>'102', 'points_away'=>'85'],
            ['team_id_home'=>'7', 'team_id_away'=>'8', 'date'=>'2020-05-10', 'time'=>'20:00' , 'stadium_id'=>'7', 'points_home'=>'75', 'points_away'=>'80'],
            ['team_id_home'=>'9', 'team_id_away'=>'10', 'date'=>'2020-05-10', 'time'=>'20:00' , 'stadium_id'=>'9', 'points_home'=>'80', 'points_away'=>'100'],




        ]);
    }
}
