<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            ['name'=>'Quinn Cook',           'years'=>'24', 'height' => '1.98 ', 'weight' => '85 ', 'avg_points'=>'13', 'avg_assist'=>'6', 'avg_rebounds'=>'4', 'team_id'=>'1', 'position_id'=>'1' , 'img_url'=>'/img/quinn_cook.png', 'free'=>'0', 'sum'=>' 23 ', 'games_played'=>'1' ],
            ['name'=>'Alex Caruso',          'years'=>'22', 'height' => '2.03 ', 'weight' => '88 ', 'avg_points'=>'16', 'avg_assist'=>'4', 'avg_rebounds'=>'2', 'team_id'=>'1', 'position_id'=>'2' , 'img_url'=>'/img/alex_caruso.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Devontae Cacok',       'years'=>'25', 'height' => '2.06 ', 'weight' => '88 ', 'avg_points'=>'20', 'avg_assist'=>'5', 'avg_rebounds'=>'4', 'team_id'=>'1', 'position_id'=>'3' , 'img_url'=>'/img/devontae_cacok.png', 'free'=>'0', 'sum'=>' 29 ', 'games_played'=>'1' ],
            ['name'=>'Avery Bradley',        'years'=>'23', 'height' => '2.10 ', 'weight' => '90 ', 'avg_points'=>'18', 'avg_assist'=>'4', 'avg_rebounds'=>'3', 'team_id'=>'1', 'position_id'=>'4' , 'img_url'=>'/img/avery_bradley.png', 'free'=>'0', 'sum'=>' 25 ', 'games_played'=>'1' ],
            ['name'=>'Kostas Antetokounmpo', 'years'=>'26', 'height' => '2.12 ', 'weight' => '93 ', 'avg_points'=>'25', 'avg_assist'=>'3', 'avg_rebounds'=>'8', 'team_id'=>'1', 'position_id'=>'5' , 'img_url'=>'/img/kostas_antetokounmpo.png', 'free'=>'0', 'sum'=>' 36 ', 'games_played'=>'1' ],


            ['name'=>'Charles Brown Jr.', 'years'=>'25', 'height' => '1.97 ', 'weight' => '83 ',   'avg_points'=>'9',  'avg_assist'=>'4', 'avg_rebounds'=>'1', 'team_id'=>'2', 'position_id'=>'1' , 'img_url'=>'/img/charles_brown_jr.png', 'free'=>'0', 'sum'=>' 14 ', 'games_played'=>'1' ],
            ['name'=>'Vince Carter',      'years'=>'43', 'height' => '2.08 ', 'weight' => '85 ',   'avg_points'=>'15', 'avg_assist'=>'6', 'avg_rebounds'=>'7', 'team_id'=>'2', 'position_id'=>'2' , 'img_url'=>'/img/vince_carter.png', 'free'=>'0', 'sum'=>' 28 ', 'games_played'=>'1' ],
            ['name'=>'John Collins',      'years'=>'26', 'height' => '2.05 ', 'weight' => '87.5 ', 'avg_points'=>'17', 'avg_assist'=>'2', 'avg_rebounds'=>'4', 'team_id'=>'2', 'position_id'=>'3' , 'img_url'=>'/img/john_collins.png', 'free'=>'0', 'sum'=>' 23 ', 'games_played'=>'1' ],
            ['name'=>'Deadre Bembry',     'years'=>'28', 'height' => '2.07 ', 'weight' => '90 ',   'avg_points'=>'17', 'avg_assist'=>'3', 'avg_rebounds'=>'7', 'team_id'=>'2', 'position_id'=>'4' , 'img_url'=>'/img/deadre_bembry.png', 'free'=>'0', 'sum'=>' 27 ', 'games_played'=>'1' ],
            ['name'=>'Clint Capela',      'years'=>'25', 'height' => '2.13 ', 'weight' => '92 ',   'avg_points'=>'20', 'avg_assist'=>'5', 'avg_rebounds'=>'11','team_id'=>'2', 'position_id'=>'5' , 'img_url'=>'/img/clint_capela.png', 'free'=>'0', 'sum'=>' 36 ', 'games_played'=>'1' ],


            ['name'=>'Carsen Edwards', 'years'=>'23', 'height' => '1.91 ', 'weight' => '80 ', 'avg_points'=>'15', 'avg_assist'=>'5', 'avg_rebounds'=>'2', 'team_id'=>'3', 'position_id'=>'1' , 'img_url'=>'/img/carsen_edwards.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Javonte Green',  'years'=>'22', 'height' => '1.98 ', 'weight' => '83 ', 'avg_points'=>'18', 'avg_assist'=>'4', 'avg_rebounds'=>'3', 'team_id'=>'3', 'position_id'=>'2' , 'img_url'=>'/img/javonte_green.png', 'free'=>'0', 'sum'=>' 25 ', 'games_played'=>'1' ],
            ['name'=>'Jaylen Brown',   'years'=>'23', 'height' => '2.03 ', 'weight' => '85 ', 'avg_points'=>'25', 'avg_assist'=>'3', 'avg_rebounds'=>'4', 'team_id'=>'3', 'position_id'=>'3' , 'img_url'=>'/img/jaylen_brown.png', 'free'=>'0', 'sum'=>' 32 ', 'games_played'=>'1' ],
            ['name'=>'Enes Kanter',    'years'=>'26', 'height' => '2.10 ', 'weight' => '95 ', 'avg_points'=>'23', 'avg_assist'=>'4', 'avg_rebounds'=>'8', 'team_id'=>'3', 'position_id'=>'4' , 'img_url'=>'/img/enes_kanter.png', 'free'=>'0', 'sum'=>' 35 ', 'games_played'=>'1' ],
            ['name'=>'Tacko Fall',     'years'=>'25', 'height' => '2.17 ', 'weight' => '99 ', 'avg_points'=>'20', 'avg_assist'=>'4', 'avg_rebounds'=>'12', 'team_id'=>'3', 'position_id'=>'5' , 'img_url'=>'/img/tacko_fall.png', 'free'=>'0', 'sum'=>' 36 ', 'games_played'=>'1' ],


            ['name'=>'Stephen Curry', 'years'=>'24', 'height' => '1.89 ', 'weight' => '81 ', 'avg_points'=>'30', 'avg_assist'=>'9', 'avg_rebounds'=>'2', 'team_id'=>'4', 'position_id'=>'1' , 'img_url'=>'/img/stephen_curry.png', 'free'=>'0', 'sum'=>' 41 ', 'games_played'=>'1' ],
            ['name'=>'Damion Lee',    'years'=>'23', 'height' => '1.93 ', 'weight' => '85 ', 'avg_points'=>'13', 'avg_assist'=>'6', 'avg_rebounds'=>'4', 'team_id'=>'4', 'position_id'=>'2' , 'img_url'=>'/img/damion_lee.png', 'free'=>'0', 'sum'=>' 23 ', 'games_played'=>'1' ],
            ['name'=>'Klay Thompson', 'years'=>'25', 'height' => '1.97 ', 'weight' => '88 ', 'avg_points'=>'28', 'avg_assist'=>'7', 'avg_rebounds'=>'4', 'team_id'=>'4', 'position_id'=>'3' , 'img_url'=>'/img/klay_thompson.png', 'free'=>'0', 'sum'=>' 39 ', 'games_played'=>'1' ],
            ['name'=>'Alen Smailagic','years'=>'21', 'height' => '2.08 ', 'weight' => '90 ', 'avg_points'=>'12', 'avg_assist'=>'5', 'avg_rebounds'=>'6', 'team_id'=>'4', 'position_id'=>'4' , 'img_url'=>'/img/alen_smailagic.png', 'free'=>'0', 'sum'=>' 23 ', 'games_played'=>'1' ],
            ['name'=>'Dragan Bender', 'years'=>'23', 'height' => '2.12 ', 'weight' => '98 ', 'avg_points'=>'16', 'avg_assist'=>'4', 'avg_rebounds'=>'8', 'team_id'=>'4', 'position_id'=>'5' , 'img_url'=>'/img/dragan_bender.png', 'free'=>'0', 'sum'=>' 28 ', 'games_played'=>'1' ],




            ['name'=>'Darius Garland',        'years'=>'24', 'height' => '1.92 ', 'weight' => '82 ', 'avg_points'=>'13', 'avg_assist'=>'6', 'avg_rebounds'=>'4', 'team_id'=>'5', 'position_id'=>'1' , 'img_url'=>'/img/darius_garland.png', 'free'=>'0', 'sum'=>' 23 ', 'games_played'=>'1' ],
            ['name'=>'Matthew Dellavedova',   'years'=>'28', 'height' => '1.93 ', 'weight' => '85 ', 'avg_points'=>'20', 'avg_assist'=>'7', 'avg_rebounds'=>'2', 'team_id'=>'5', 'position_id'=>'2' , 'img_url'=>'/img/matthew_dellavedova.png', 'free'=>'0', 'sum'=>' 29 ', 'games_played'=>'1' ],
            ['name'=>'Dante Exum',            'years'=>'25', 'height' => '2.00 ', 'weight' => '88 ', 'avg_points'=>'22', 'avg_assist'=>'3', 'avg_rebounds'=>'4', 'team_id'=>'5', 'position_id'=>'3' , 'img_url'=>'/img/dante_exum.png', 'free'=>'0', 'sum'=>' 29 ', 'games_played'=>'1' ],
            ['name'=>'Kevin Love',            'years'=>'26', 'height' => '2.06 ', 'weight' => '90 ', 'avg_points'=>'23', 'avg_assist'=>'6', 'avg_rebounds'=>'7', 'team_id'=>'5', 'position_id'=>'4' , 'img_url'=>'/img/kevin_love.png', 'free'=>'0', 'sum'=>' 36 ', 'games_played'=>'1' ],
            ['name'=>'Andre Drummond',        'years'=>'26', 'height' => '2.12 ', 'weight' => '97 ', 'avg_points'=>'24', 'avg_assist'=>'3', 'avg_rebounds'=>'10', 'team_id'=>'5', 'position_id'=>'5' , 'img_url'=>'/img/andre_drummond.png', 'free'=>'0', 'sum'=>' 37 ', 'games_played'=>'1' ],


            ['name'=>'Goran Dragic', 'years'=>'25', 'height' => '1.93 ', 'weight' => '81 ',   'avg_points'=>'26',  'avg_assist'=>'7', 'avg_rebounds'=>'2', 'team_id'=>'6', 'position_id'=>'1' , 'img_url'=>'/img/goran_dragic.png', 'free'=>'0', 'sum'=>' 35 ', 'games_played'=>'1' ],
            ['name'=>'Tyler Herro',  'years'=>'26', 'height' => '1.98 ', 'weight' => '87 ',   'avg_points'=>'12', 'avg_assist'=>'3', 'avg_rebounds'=>'2', 'team_id'=>'6', 'position_id'=>'2' , 'img_url'=>'/img/tyler_herro.png', 'free'=>'0', 'sum'=>' 17 ', 'games_played'=>'1' ],
            ['name'=>'Jimmy Butler', 'years'=>'24', 'height' => '2.02 ', 'weight' => '89 ', 'avg_points'=>'25', 'avg_assist'=>'2', 'avg_rebounds'=>'4', 'team_id'=>'6', 'position_id'=>'3' , 'img_url'=>'/img/jimmy_butler.png', 'free'=>'0', 'sum'=>' 31 ', 'games_played'=>'1' ],
            ['name'=>'Jae Crowder',  'years'=>'28', 'height' => '2.09 ', 'weight' => '99 ',   'avg_points'=>'10', 'avg_assist'=>'2', 'avg_rebounds'=>'8', 'team_id'=>'6', 'position_id'=>'4' , 'img_url'=>'/img/jae_crowder.png', 'free'=>'0', 'sum'=>' 20 ', 'games_played'=>'1' ],
            ['name'=>'Bam Adebayo',  'years'=>'25', 'height' => '2.15 ', 'weight' => '100 ',   'avg_points'=>'12', 'avg_assist'=>'3', 'avg_rebounds'=>'7','team_id'=>'6', 'position_id'=>'5' , 'img_url'=>'/img/bam_adebayo.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],


            ['name'=>'Kris Dunn',        'years'=>'23', 'height' => '1.87 ', 'weight' => '81 ', 'avg_points'=>'8', 'avg_assist'=>'5', 'avg_rebounds'=>'2', 'team_id'=>'7', 'position_id'=>'1' , 'img_url'=>'/img/kris_dunn.png', 'free'=>'0', 'sum'=>' 15 ', 'games_played'=>'1' ],
            ['name'=>'Ryan Arcidiacono', 'years'=>'22', 'height' => '1.93 ', 'weight' => '83 ', 'avg_points'=>'12', 'avg_assist'=>'5', 'avg_rebounds'=>'2', 'team_id'=>'7', 'position_id'=>'2' , 'img_url'=>'/img/ryan_arcidiacono.png', 'free'=>'0', 'sum'=>' 19 ', 'games_played'=>'1' ],
            ['name'=>'Zach LaVine',      'years'=>'24', 'height' => '1.98 ', 'weight' => '86 ', 'avg_points'=>'26', 'avg_assist'=>'5', 'avg_rebounds'=>'5', 'team_id'=>'7', 'position_id'=>'3' , 'img_url'=>'/img/zach_lavine.png', 'free'=>'0', 'sum'=>' 36 ', 'games_played'=>'1' ],
            ['name'=>'Cristiano Felicio','years'=>'26', 'height' => '2.10 ', 'weight' => '96 ', 'avg_points'=>'12', 'avg_assist'=>'2', 'avg_rebounds'=>'6', 'team_id'=>'7', 'position_id'=>'4' , 'img_url'=>'/img/cristiano_felicio.png', 'free'=>'0', 'sum'=>' 20 ', 'games_played'=>'1' ],
            ['name'=>'Daniel Gafford',   'years'=>'25', 'height' => '2.16 ', 'weight' => '98.5 ', 'avg_points'=>'17', 'avg_assist'=>'4', 'avg_rebounds'=>'8', 'team_id'=>'7', 'position_id'=>'5' , 'img_url'=>'/img/daniel_gafford.png', 'free'=>'0', 'sum'=>' 29 ', 'games_played'=>'1' ],


            ['name'=>'Monte Morris',   'years'=>'24', 'height' => '1.87 ', 'weight' => '80 ', 'avg_points'=>'16', 'avg_assist'=>'7', 'avg_rebounds'=>'1', 'team_id'=>'8', 'position_id'=>'1' , 'img_url'=>'/img/monte_morris.png', 'free'=>'0', 'sum'=>' 24 ', 'games_played'=>'1' ],
            ['name'=>'Will Barton',    'years'=>'26', 'height' => '1.91 ', 'weight' => '83 ', 'avg_points'=>'10', 'avg_assist'=>'4', 'avg_rebounds'=>'3', 'team_id'=>'8', 'position_id'=>'2' , 'img_url'=>'/img/will_barton.png', 'free'=>'0', 'sum'=>' 17 ', 'games_played'=>'1' ],
            ['name'=>'PJ Dozier',      'years'=>'23', 'height' => '1.97 ', 'weight' => '89 ', 'avg_points'=>'13', 'avg_assist'=>'3', 'avg_rebounds'=>'4', 'team_id'=>'8', 'position_id'=>'3' , 'img_url'=>'/img/pj_dozier.png', 'free'=>'0', 'sum'=>' 20 ', 'games_played'=>'1' ],
            ['name'=>'Paul Millsap',   'years'=>'30', 'height' => '2.05 ', 'weight' => '95 ', 'avg_points'=>'16', 'avg_assist'=>'3', 'avg_rebounds'=>'6', 'team_id'=>'8', 'position_id'=>'4' , 'img_url'=>'/img/paul_millsap.png', 'free'=>'0', 'sum'=>' 25 ', 'games_played'=>'1' ],
            ['name'=>'Nikola Jokic',   'years'=>'24', 'height' => '2.10 ', 'weight' => '98 ', 'avg_points'=>'25', 'avg_assist'=>'8', 'avg_rebounds'=>'9', 'team_id'=>'8', 'position_id'=>'5' , 'img_url'=>'/img/nikola_jokic.png', 'free'=>'0', 'sum'=>' 42 ', 'games_played'=>'1' ],


            ['name'=>'Eric Gordon',     'years'=>'24', 'height' => '1.98 ', 'weight' => '85 ', 'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'9', 'position_id'=>'1' , 'img_url'=>'/img/eric_gordon.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'James Harden',    'years'=>'22', 'height' => '2.03 ', 'weight' => '88 ', 'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'9', 'position_id'=>'2' , 'img_url'=>'/img/james_harden.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Robert Covington','years'=>'25', 'height' => '2.06 ', 'weight' => '88 ', 'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'9', 'position_id'=>'3' , 'img_url'=>'/img/robert_covigton.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Jeff Green',      'years'=>'23', 'height' => '2.10 ', 'weight' => '90 ', 'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'9', 'position_id'=>'4' , 'img_url'=>'/img/jeff_green.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Tyson Chandler',  'years'=>'26', 'height' => '2.12 ', 'weight' => '93 ', 'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'9', 'position_id'=>'5' , 'img_url'=>'/img/tyson_chandler.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],


            ['name'=>'Yogi Ferrel',      'years'=>'23', 'height' => '1.97 ', 'weight' => '83 ',   'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'10', 'position_id'=>'1' , 'img_url'=>'/img/yogi_ferrel.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Bogdan Bogdanovic','years'=>'25', 'height' => '2.08 ', 'weight' => '85 ',   'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'10', 'position_id'=>'2' , 'img_url'=>'/img/bogdan_bogdanovic.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Kent Bazemore',    'years'=>'26', 'height' => '2.05 ', 'weight' => '87.5 ', 'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'10', 'position_id'=>'3' , 'img_url'=>'/img/kent_bazemore.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Nemanja Bjelica',  'years'=>'28', 'height' => '2.07 ', 'weight' => '90 ',   'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'10', 'position_id'=>'4' , 'img_url'=>'/img/nemanja_bjelica.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],
            ['name'=>'Alex Len',         'years'=>'25', 'height' => '2.13 ', 'weight' => '92 ',   'avg_points'=>'10', 'avg_assist'=>'5', 'avg_rebounds'=>'7', 'team_id'=>'10', 'position_id'=>'5' , 'img_url'=>'/img/alex_len.png', 'free'=>'0', 'sum'=>' 22 ', 'games_played'=>'1' ],

        ]);
    }
}

