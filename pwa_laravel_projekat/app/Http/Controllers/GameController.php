<?php

namespace App\Http\Controllers;

use App\Game;
use App\GameStatistic;
use App\Player;
use App\Schedule;
use App\Standings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', ['games'=>$games]);
    }

    public function show(Game $game)
    {
        return view('games.show', ['game'=>$game]);
    }

    public function play()
    {
        $schedule = Schedule::query()->orderBy('date')->first(); //uzima se prva utakmica iz rasporeda

        //prvo generisemo statistiku za HOME tim
       $two_point_scored_home = rand(15, 30);
       $two_point_shots_home = rand(40, 60);
       $percentage_two_point_home = $two_point_scored_home / $two_point_shots_home*100;

       $three_point_scored_home = rand(10, 20);
       $three_point_shots_home = rand(22, 50);
       $percentage_three_point_home = $three_point_scored_home / $three_point_shots_home*100;

       $free_throw_scored_home = rand(15,20) ;
       $free_throw_shots_home = rand(22, 30);
       $percentage_free_throw_home = $free_throw_scored_home / $free_throw_shots_home*100;

       $fouls_home = rand(15, 30);

       //statistika sa AWAY tim
       $two_point_scored_away = rand(15, 30);
       $two_point_shots_away = rand(40, 60);
       $percentage_two_point_away = $two_point_scored_away / $two_point_shots_away*100;

       $three_point_scored_away = rand(10, 20);
       $three_point_shots_away = rand(22, 50);
       $percentage_three_point_away = $three_point_scored_away / $three_point_shots_away*100;

       $free_throw_scored_away = rand(15, 20) ;
       $free_throw_shots_away = rand(22, 30);
       $percentage_free_throw_away = $free_throw_scored_away / $free_throw_shots_away*100;

       $fouls_away = rand(15, 30);

       $rezultat_HOME = ($two_point_scored_home * 2) + ($three_point_scored_home * 3) + $free_throw_scored_home;
       $rezultat_AWAY = ($two_point_scored_away * 2) + ($three_point_scored_away * 3) + $free_throw_scored_away;


       //da ne bude nereseno
       if($rezultat_HOME == $rezultat_AWAY)
       {
           $rezultat_HOME++;
       }

        //ubacujemo red u tabelu games
        Game::query()->insert([

            'team_id_home'=> $schedule->team_id_home,
            'team_id_away'=>$schedule->team_id_away,
            'date'=>$schedule->date,
            'time'=>$schedule->time,
            'stadium_id'=>$schedule->stadium_id,
            'points_home'=>$rezultat_HOME,
            'points_away'=>$rezultat_AWAY,

        ]);

        //sad treba da obrisemo red iz tabele schedule
        $schedule->delete();

        //hvatamo trenutni game
        $game = Game::query()->orderByDesc('id')->first();

        //popunjavamo tabelu game_statistics
        GameStatistic::query()->insert([
            ['game_id' => $game->id,'team'=>'HOME', 'two_point_scored'=>$two_point_scored_home, 'two_point_shots'=>$two_point_shots_home, 'percentage_two_point'=>$percentage_two_point_home, 'three_point_scored'=>$three_point_scored_home, 'three_point_shots'=>$three_point_shots_home , 'percentage_three_point'=>$percentage_three_point_home,'free_throw_scored'=>$free_throw_scored_home, 'free_throw_shots'=>$free_throw_shots_home ,'percentage_free_throw'=>$percentage_free_throw_home, 'fouls'=>$fouls_home ],
            ['game_id' => $game->id,'team'=>'AWAY', 'two_point_scored'=>$two_point_scored_away, 'two_point_shots'=>$two_point_shots_away, 'percentage_two_point'=>$percentage_two_point_away, 'three_point_scored'=>$three_point_scored_away, 'three_point_shots'=>$three_point_shots_away , 'percentage_three_point'=>$percentage_three_point_away,'free_throw_scored'=>$free_throw_scored_away, 'free_throw_shots'=>$free_throw_shots_away ,'percentage_free_throw'=>$percentage_free_throw_away, 'fouls'=>$fouls_away ],

        ]);

        //sada popunjavamo tabelu player_statistics za igrace HOME tima
        foreach ($game->team_home->players as $igrac)
        {
            $igrac_points = rand(8,15);
            $igrac_assists = rand(3,9);
            $igrac_rebounds = rand(1,11);

            DB::table('player_statistics')->insert([
                ['game_id'=>$game->id, 'player_id'=>$igrac->id, 'points'=>$igrac_points, 'assists'=>$igrac_assists, 'rebounds'=>$igrac_rebounds],
            ]);
        }

        //sada popunjavamo tabelu player_statistics za igrace AWAY tima
        foreach ($game->team_away->players as $igrac)
        {
            $igrac_points = rand(8,15);
            $igrac_assists = rand(3,9);
            $igrac_rebounds = rand(1,11);

            DB::table('player_statistics')->insert([
                ['game_id'=>$game->id, 'player_id'=>$igrac->id, 'points'=>$igrac_points, 'assists'=>$igrac_assists, 'rebounds'=>$igrac_rebounds],
            ]);
        }

        //vucemo deo iz statistike igraca koji je vezan za trenutnu utakmicu
        $stat_igraca = DB::table('player_statistics')->where('game_id', $game->id)->get();

        //prolazimo kroz svakog igraca koji je igrao trenutnu utakmicu i racunamo avg poene, asist i reb!
        foreach ($stat_igraca as $stat_jednog_igraca)
        {
            $igrac = Player::query()->find($stat_jednog_igraca->player_id);
            $igrac->avg_points =  ($igrac->avg_points * $igrac->games_played + $stat_jednog_igraca->points) / ($igrac->games_played + 1);
            $igrac->avg_assist =  ($igrac->avg_assist * $igrac->games_played + $stat_jednog_igraca->assists) / ($igrac->games_played + 1);
            $igrac->avg_rebounds =  ($igrac->avg_rebounds * $igrac->games_played + $stat_jednog_igraca->rebounds) / ($igrac->games_played + 1);
            /** @var Player $igrac */
            $igrac->sum = $igrac->avg_points + $igrac->avg_assist + $igrac->avg_rebounds;
            $igrac->games_played++;

            $igrac->save();
        }

        //uzimamo tabelu standings i menjamo atribute timova koji su odigrali trenutnu utakmicu(prvo HOME)
        $tim_u_tabeli_home = Standings::query()->where('team_id', $game->team_home->id)->first();

        $tim_u_tabeli_home->games_played++;
        $tim_u_tabeli_home->scored_received = $tim_u_tabeli_home->scored_received + $rezultat_HOME - $rezultat_AWAY;

        if($rezultat_HOME > $rezultat_AWAY)
        {
            $tim_u_tabeli_home->games_won++;
            $tim_u_tabeli_home->points++;
        }else{

            $tim_u_tabeli_home->games_lost++;
        }
        $tim_u_tabeli_home->save();



        //uzimamo tabelu standings i menjamo atribute timova koji su odigrali trenutnu utakmicu(sada AWAY)
        $tim_u_tabeli_away = Standings::query()->where('team_id', $game->team_away->id)->first();


        $tim_u_tabeli_away->games_played++;
        $tim_u_tabeli_away->scored_received = $tim_u_tabeli_away->scored_received + $rezultat_AWAY - $rezultat_HOME;

        if($rezultat_AWAY > $rezultat_HOME)
        {
            $tim_u_tabeli_away->games_won++;
            $tim_u_tabeli_away->points++;

        }else{
            $tim_u_tabeli_away->games_lost++;
        }

        $tim_u_tabeli_away->save();


        //sada treba da uzmemu celu tabelu da je sortiramo kako treba i takvu da je vratimo
        $tabela = DB::table('standings')->orderByDesc('points')->orderByDesc('scored_received')->get();
        $i = 1;


        foreach ($tabela as $redTabele) {
            $redTabele->position = $i++;
        }

        DB::table('standings')->delete();


        foreach ($tabela as $red) {
            Standings::query()->insert([
                ['position' => $red->position, 'team_id'=>$red->team_id, 'games_played'=>$red->games_played, 'games_won'=>$red->games_won, 'games_lost'=>$red->games_lost, 'scored_received'=>$red->scored_received, 'points'=>$red->points],

            ]);
        }


        return redirect("/games");

    }
}
