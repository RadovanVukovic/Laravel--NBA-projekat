<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            ['name' => 'Los Angeles Lakers',    'founded'=> '1947', 'img_url'=>'/img/lakers.png'],
            ['name' => 'Atlanta Hawks',         'founded'=> '1946', 'img_url'=>'/img/atlanta_hawks.png'],
            ['name' => 'Boston Celtics',        'founded'=> '1946', 'img_url'=>'/img/boston.png'],
            ['name' => 'Golden State Warriors', 'founded'=> '1943', 'img_url'=>'/img/golden_state.png'],
            ['name' => 'Cleveland Cavaliers',   'founded'=> '1948', 'img_url'=>'/img/cleveland.png'],
            ['name' => 'Miami Heat',            'founded'=> '1949', 'img_url'=>'/img/miami.png'],
            ['name' => 'Chicago Bulls',         'founded'=> '1950', 'img_url'=>'/img/chicago.png'],
            ['name' => 'Denver Nuggets',        'founded'=> '1939', 'img_url'=>'/img/denver.png'],
            ['name' => 'Houston Rockets',       'founded'=> '1945', 'img_url'=>'/img/houston.jpg'],
            ['name' => 'Sacramento Kings',      'founded'=> '1944', 'img_url'=>'/img/sacramento.png'],

        ]);

    }
}
