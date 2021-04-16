<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            ['name' => 'Rob Pelinka',        'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'42','img_url'=>'/img/lakers_manager.jpg' , 'team_id'=>'1'],
            ['name' => 'Danny Ainge',        'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'47', 'img_url'=>'/img/atlanta_manager.jpg' , 'team_id'=>'2'],
            ['name' => 'Travis Schlenk',     'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'40', 'img_url'=>'/img/boston_manager.jpg' , 'team_id'=>'3'],
            ['name' => 'Steve Kerr',         'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'40', 'img_url'=>'/img/golden_state_manager.jpg' , 'team_id'=>'4'],
            ['name' => 'Koby Altman',        'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'35', 'img_url'=>'/img/cleveland_manager.jpg' , 'team_id'=>'5'],
            ['name' => 'Erik Spoelstra',     'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'44', 'img_url'=>'/img/miami_manager.jpg' , 'team_id'=>'6'],
            ['name' => 'Jim Boylen',         'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'41', 'img_url'=>'/img/chicago_manager.jpg' , 'team_id'=>'7'],
            ['name' => 'Arturas Karnisovas', 'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'38', 'img_url'=>'/img/denver_manager.jpg' , 'team_id'=>'8'],
            ['name' => 'Daryl Morey',        'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'40', 'img_url'=>'/img/houston_manager.jpg' , 'team_id'=>'9'],
            ['name' => 'Vlade Divac',        'password'=>'$2y$10$Rl4wQ7ucDVqtb1PWtg11E.4rdAr4QiddbgiNRf66hSPkhn14LxcTO', 'years'=>'44', 'img_url'=>'/img/sacramento_manager.jpg' , 'team_id'=>'10'],



        ]);
    }
}
