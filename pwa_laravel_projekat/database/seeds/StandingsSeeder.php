<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('standings')->insert([
            ['position' => '1', 'team_id'=>'10', 'games_played'=>'1', 'games_won'=>'1', 'games_lost'=>'0', 'scored_received'=>'20', 'points'=>'1'],

            ['position' => '2', 'team_id'=>'5', 'games_played'=>'1', 'games_won'=>'1', 'games_lost'=>'0', 'scored_received'=>'17', 'points'=>'1'],
            ['position' => '3', 'team_id'=>'1', 'games_played'=>'1', 'games_won'=>'1', 'games_lost'=>'0', 'scored_received'=>'14', 'points'=>'1'],
            ['position' => '4', 'team_id'=>'8', 'games_played'=>'1', 'games_won'=>'1', 'games_lost'=>'0', 'scored_received'=>'5', 'points'=>'1'],
            ['position' => '5', 'team_id'=>'3', 'games_played'=>'1', 'games_won'=>'1', 'games_lost'=>'0', 'scored_received'=>'2', 'points'=>'1'],

            ['position' => '6', 'team_id'=>'4', 'games_played'=>'1', 'games_won'=>'0', 'games_lost'=>'1', 'scored_received'=>'-2', 'points'=>'0'],
            ['position' => '7', 'team_id'=>'7', 'games_played'=>'1', 'games_won'=>'0', 'games_lost'=>'1', 'scored_received'=>'-5', 'points'=>'0'],
            ['position' => '8', 'team_id'=>'2', 'games_played'=>'1', 'games_won'=>'0', 'games_lost'=>'1', 'scored_received'=>'-14', 'points'=>'0'],
            ['position' => '9', 'team_id'=>'6', 'games_played'=>'1', 'games_won'=>'0', 'games_lost'=>'1', 'scored_received'=>'-17', 'points'=>'0'],
            ['position' => '10', 'team_id'=>'9', 'games_played'=>'1', 'games_won'=>'0', 'games_lost'=>'1', 'scored_received'=>'-20', 'points'=>'0'],






        ]);
    }
}

