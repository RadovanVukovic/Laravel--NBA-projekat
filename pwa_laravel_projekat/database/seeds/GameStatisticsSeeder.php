<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameStatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_statistics')->insert([
            ['game_id' => '1','team'=>'HOME', 'two_point_scored'=>'20', 'two_point_shots'=>'60', 'percentage_two_point'=>'30', 'three_point_scored'=>'15', 'three_point_shots'=>'45' , 'percentage_three_point'=>'30','free_throw_scored'=>'7', 'free_throw_shots'=>'14' ,'percentage_free_throw'=>'50', 'fouls'=>'20' ],
            ['game_id' => '1','team'=>'AWAY', 'two_point_scored'=>'20', 'two_point_shots'=>'40', 'percentage_two_point'=>'50', 'three_point_scored'=>'13', 'three_point_shots'=>'26' , 'percentage_three_point'=>'50','free_throw_scored'=>'9', 'free_throw_shots'=>'18' ,'percentage_free_throw'=>'50', 'fouls'=>'25' ],

            ['game_id' => '2','team'=>'HOME', 'two_point_scored'=>'30', 'two_point_shots'=>'50', 'percentage_two_point'=>'60', 'three_point_scored'=>'10', 'three_point_shots'=>'30' , 'percentage_three_point'=>'30','free_throw_scored'=>'11', 'free_throw_shots'=>'22' ,'percentage_free_throw'=>'50', 'fouls'=>'17' ],
            ['game_id' => '2','team'=>'AWAY', 'two_point_scored'=>'15', 'two_point_shots'=>'45', 'percentage_two_point'=>'30', 'three_point_scored'=>'20', 'three_point_shots'=>'50' , 'percentage_three_point'=>'40','free_throw_scored'=>'9', 'free_throw_shots'=>'27' ,'percentage_free_throw'=>'30', 'fouls'=>'18' ],

            ['game_id' => '3','team'=>'HOME', 'two_point_scored'=>'27', 'two_point_shots'=>'40', 'percentage_two_point'=>'67.5', 'three_point_scored'=>'12', 'three_point_shots'=>'20' , 'percentage_three_point'=>'60','free_throw_scored'=>'12', 'free_throw_shots'=>'24' ,'percentage_free_throw'=>'50', 'fouls'=>'23' ],
            ['game_id' => '3','team'=>'AWAY', 'two_point_scored'=>'10', 'two_point_shots'=>'20', 'percentage_two_point'=>'50', 'three_point_scored'=>'15', 'three_point_shots'=>'32' , 'percentage_three_point'=>'46.9','free_throw_scored'=>'20', 'free_throw_shots'=>'25' ,'percentage_free_throw'=>'80', 'fouls'=>'25' ],

            ['game_id' => '4','team'=>'HOME', 'two_point_scored'=>'10', 'two_point_shots'=>'20', 'percentage_two_point'=>'50', 'three_point_scored'=>'14', 'three_point_shots'=>'42' , 'percentage_three_point'=>'30','free_throw_scored'=>'13', 'free_throw_shots'=>'26' ,'percentage_free_throw'=>'50', 'fouls'=>'24' ],
            ['game_id' => '4','team'=>'AWAY', 'two_point_scored'=>'12', 'two_point_shots'=>'36', 'percentage_two_point'=>'30', 'three_point_scored'=>'15', 'three_point_shots'=>'30' , 'percentage_three_point'=>'50','free_throw_scored'=>'11', 'free_throw_shots'=>'22' ,'percentage_free_throw'=>'50', 'fouls'=>'27' ],

            ['game_id' => '5','team'=>'HOME', 'two_point_scored'=>'10', 'two_point_shots'=>'20', 'percentage_two_point'=>'50', 'three_point_scored'=>'14', 'three_point_shots'=>'42' , 'percentage_three_point'=>'30','free_throw_scored'=>'18', 'free_throw_shots'=>'36' ,'percentage_free_throw'=>'50', 'fouls'=>'24' ],
            ['game_id' => '5','team'=>'AWAY', 'two_point_scored'=>'22', 'two_point_shots'=>'44', 'percentage_two_point'=>'50', 'three_point_scored'=>'15', 'three_point_shots'=>'30' , 'percentage_three_point'=>'50','free_throw_scored'=>'11', 'free_throw_shots'=>'22' ,'percentage_free_throw'=>'50', 'fouls'=>'27' ],
        ]);
    }
}

