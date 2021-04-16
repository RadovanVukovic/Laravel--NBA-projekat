<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerStatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_statistics')->insert([
            ['game_id'=>'1', 'player_id'=>'1', 'points'=>'13', 'assists'=>'6', 'rebounds'=>'4'],
            ['game_id'=>'1', 'player_id'=>'2', 'points'=>'16', 'assists'=>'4', 'rebounds'=>'2'],
            ['game_id'=>'1', 'player_id'=>'3', 'points'=>'20', 'assists'=>'5', 'rebounds'=>'4'],
            ['game_id'=>'1', 'player_id'=>'4', 'points'=>'18', 'assists'=>'4', 'rebounds'=>'3'],
            ['game_id'=>'1', 'player_id'=>'5', 'points'=>'25', 'assists'=>'3', 'rebounds'=>'8'],

            ['game_id'=>'1', 'player_id'=>'6', 'points'=>'9',  'assists'=>'4', 'rebounds'=>'1'],
            ['game_id'=>'1', 'player_id'=>'7', 'points'=>'15', 'assists'=>'6', 'rebounds'=>'7'],
            ['game_id'=>'1', 'player_id'=>'8', 'points'=>'17', 'assists'=>'2', 'rebounds'=>'4'],
            ['game_id'=>'1', 'player_id'=>'9', 'points'=>'17', 'assists'=>'3', 'rebounds'=>'7'],
            ['game_id'=>'1', 'player_id'=>'10', 'points'=>'20', 'assists'=>'5', 'rebounds'=>'11'],



            ['game_id'=>'2', 'player_id'=>'11', 'points'=>'15', 'assists'=>'5', 'rebounds'=>'2'],
            ['game_id'=>'2', 'player_id'=>'12', 'points'=>'18', 'assists'=>'4', 'rebounds'=>'3'],
            ['game_id'=>'2', 'player_id'=>'13', 'points'=>'25', 'assists'=>'3', 'rebounds'=>'4'],
            ['game_id'=>'2', 'player_id'=>'14', 'points'=>'23', 'assists'=>'4', 'rebounds'=>'8'],
            ['game_id'=>'2', 'player_id'=>'15', 'points'=>'20', 'assists'=>'4', 'rebounds'=>'12'],

            ['game_id'=>'2', 'player_id'=>'16', 'points'=>'30', 'assists'=>'9', 'rebounds'=>'2'],
            ['game_id'=>'2', 'player_id'=>'17', 'points'=>'13', 'assists'=>'6', 'rebounds'=>'4'],
            ['game_id'=>'2', 'player_id'=>'18', 'points'=>'28', 'assists'=>'7', 'rebounds'=>'4'],
            ['game_id'=>'2', 'player_id'=>'19', 'points'=>'12', 'assists'=>'5', 'rebounds'=>'6'],
            ['game_id'=>'2', 'player_id'=>'20', 'points'=>'16', 'assists'=>'4', 'rebounds'=>'8'],



            ['game_id'=>'3', 'player_id'=>'21', 'points'=>'13', 'assists'=>'6', 'rebounds'=>'4'],
            ['game_id'=>'3', 'player_id'=>'22', 'points'=>'20', 'assists'=>'7', 'rebounds'=>'2'],
            ['game_id'=>'3', 'player_id'=>'23', 'points'=>'22', 'assists'=>'3', 'rebounds'=>'4'],
            ['game_id'=>'3', 'player_id'=>'24', 'points'=>'23', 'assists'=>'6', 'rebounds'=>'7'],
            ['game_id'=>'3', 'player_id'=>'25', 'points'=>'24', 'assists'=>'3', 'rebounds'=>'10'],

            ['game_id'=>'3', 'player_id'=>'26', 'points'=>'26',  'assists'=>'7', 'rebounds'=>'2'],
            ['game_id'=>'3', 'player_id'=>'27',  'points'=>'12', 'assists'=>'3', 'rebounds'=>'2'],
            ['game_id'=>'3', 'player_id'=>'28', 'points'=>'25', 'assists'=>'2', 'rebounds'=>'4'],
            ['game_id'=>'3', 'player_id'=>'29', 'points'=>'10', 'assists'=>'2', 'rebounds'=>'8'],
            ['game_id'=>'3', 'player_id'=>'30',  'points'=>'12', 'assists'=>'3', 'rebounds'=>'7'],



            ['game_id'=>'4', 'player_id'=>'31', 'points'=>'8', 'assists'=>'5', 'rebounds'=>'2'],
            ['game_id'=>'4', 'player_id'=>'32', 'points'=>'12', 'assists'=>'5', 'rebounds'=>'2'],
            ['game_id'=>'4', 'player_id'=>'33', 'points'=>'26', 'assists'=>'5', 'rebounds'=>'5'],
            ['game_id'=>'4', 'player_id'=>'34', 'points'=>'12', 'assists'=>'2', 'rebounds'=>'6'],
            ['game_id'=>'4', 'player_id'=>'35', 'points'=>'17', 'assists'=>'4', 'rebounds'=>'8'],

            ['game_id'=>'4', 'player_id'=>'36', 'points'=>'16', 'assists'=>'7', 'rebounds'=>'1'],
            ['game_id'=>'4', 'player_id'=>'37', 'points'=>'10', 'assists'=>'4', 'rebounds'=>'3'],
            ['game_id'=>'4', 'player_id'=>'38', 'points'=>'13', 'assists'=>'3', 'rebounds'=>'4'],
            ['game_id'=>'4', 'player_id'=>'39', 'points'=>'16', 'assists'=>'3', 'rebounds'=>'6'],
            ['game_id'=>'4', 'player_id'=>'40', 'points'=>'25', 'assists'=>'8', 'rebounds'=>'9'],


            ['game_id'=>'5', 'player_id'=>'41', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'2'],
            ['game_id'=>'5', 'player_id'=>'42', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'2'],
            ['game_id'=>'5', 'player_id'=>'43', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'5'],
            ['game_id'=>'5', 'player_id'=>'44', 'points'=>'10', 'assists'=>'2', 'rebounds'=>'6'],
            ['game_id'=>'5', 'player_id'=>'45', 'points'=>'10', 'assists'=>'4', 'rebounds'=>'8'],

            ['game_id'=>'5', 'player_id'=>'46', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'7'],
            ['game_id'=>'5', 'player_id'=>'47', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'7'],
            ['game_id'=>'5', 'player_id'=>'48', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'7'],
            ['game_id'=>'5', 'player_id'=>'49', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'7'],
            ['game_id'=>'5', 'player_id'=>'50', 'points'=>'10', 'assists'=>'5', 'rebounds'=>'7'],
        ]);
    }
}

