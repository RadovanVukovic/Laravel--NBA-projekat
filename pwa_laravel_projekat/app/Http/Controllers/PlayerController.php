<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlayerRequest;
use App\Player;
use App\Position;
use App\Team;
use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('players.index', ['players' => $players]);
    }


    public function show(Player $player)
    {
        $transfers = Transfer::query()->where('player_id', $player->id)->get();
        $i = 1;
        return view('players.show', ['player' => $player, 'transfers'=>$transfers, 'i'=>$i]);
    }


    public function edit(Player $player)
    {   if(Auth::check())
        {
            if(\Illuminate\Support\Facades\Auth::user()->team->id != $player->team->id)
            {
                return redirect("/players/$player->id");
            }
        }
        if(Auth::check() == false)
        {
            return redirect("/players/$player->id");
        }

        $positions = Position::all();
        $teams = Team::all();

        return view('players.edit', ['player'=> $player, 'positions'=> $positions, 'teams'=>$teams]);
    }


    public function update(PlayerRequest $request, Player $player)
    {


        if($request['position'] == 'NULL' AND $request['team']== 'NULL')
        {
            $player->avg_points = $request['avg_points'];
            $player->avg_assist = $request['avg_assist'];
            $player->avg_rebounds = $request['avg_rebounds'];
            $player->sum = $request['avg_points'] + $request['avg_assist'] + $request['avg_rebounds'];
            $player->save();

            $player->update($request->only(['height', 'weight', 'years']));
            return redirect("/players/$player->id");
        }

        if($request['position'] == 'NULL')
        {
            $transfer = new Transfer;

            $transfer->player_id = $player->id;
            $transfer->team_id_from = $player->team->id;
            $transfer->team_id_to = $request['team'];
            $transfer->date = date("Y-m-d");
            $transfer->money = rand(1000000, 10000000);
            $transfer->save();

            $player->team_id = $request['team'];
            $player->avg_points = $request['avg_points'];
            $player->avg_assist = $request['avg_assist'];
            $player->avg_rebounds = $request['avg_rebounds'];
            $player->sum = $request['avg_points'] + $request['avg_assist'] + $request['avg_rebounds'];
            $player->save();

            $player->update($request->only(['height', 'weight', 'years']));

            return redirect("/players/$player->id");
        }

        if($request['team'] == 'NULL')
        {
            $player->position_id = $request['position'];
            $player->avg_points = $request['avg_points'];
            $player->avg_assist = $request['avg_assist'];
            $player->avg_rebounds = $request['avg_rebounds'];
            $player->sum = $request['avg_points'] + $request['avg_assist'] + $request['avg_rebounds'];
            $player->save();

            $player->update($request->only(['height', 'weight', 'years']));
            return redirect("/players/$player->id");
        }else{

            $transfer = new Transfer;

            $transfer->player_id = $player->id;
            $transfer->team_id_from = $player->team->id;
            $transfer->team_id_to = $request['team'];
            $transfer->date = date("Y-m-d");
            $transfer->money = rand(1000000, 10000000);
            $transfer->save();

            $player->team_id = $request['team'];
            $player->position_id = $request['position'];
            $player->avg_points = $request['avg_points'];
            $player->avg_assist = $request['avg_assist'];
            $player->avg_rebounds = $request['avg_rebounds'];
            $player->sum = $request['avg_points'] + $request['avg_assist'] + $request['avg_rebounds'];
            $player->save();

            $player->update($request->only(['height', 'weight', 'years']));

            return redirect("/players/$player->id");
        }
    }


    public function fire(Player $player)
    {
        $player->free = '1';
        $player->save();

       return redirect("/players/$player->id");
    }

    public function topTen()
    {
        $players = Player::all()->sortByDesc('sum')->take(10);
        $i = 1;

        return view('players.top-ten', ['players'=>$players, 'i'=>$i]);
    }

    public function allStar()
    {
        $plejmejkeri = Player::query()->orderBy('position_id')
                                      ->orderByDesc('sum')
                                      ->where('position_id', 1)
                                      ->take(2)
                                      ->get();

        $bekSuteri = Player::query()->orderBy('position_id')
                                    ->orderByDesc('sum')
                                    ->where('position_id', 2)
                                    ->take(2)
                                    ->get();

        $krila = Player::query()->orderBy('position_id')
                                ->orderByDesc('sum')
                                ->where('position_id', 3)
                                ->take(2)
                                ->get();

        $krilniCentri = Player::query()->orderBy('position_id')
                                       ->orderByDesc('sum')
                                       ->where('position_id', 4)
                                       ->take(2)
                                       ->get();

        $centri = Player::query()->orderBy('position_id')
                                 ->orderByDesc('sum')
                                 ->where('position_id', 5)
                                 ->take(2)
                                 ->get();

        return view('players.all_star', [
            'plejmejkeri'=>$plejmejkeri,
            'bekSuteri'=>$bekSuteri,
            'krila'=>$krila,
            'krilniCentri'=>$krilniCentri,
            'centri'=>$centri,
        ]);
    }

    public function free()
    {
        $players = Player::query()->where('free', '1')->get();
        $i = 1;
        return view('players.free', ['players'=>$players, 'i'=>$i]);
    }

    public function add(Player $player)
    {
        $player->free = '0';
        $player->team_id = Auth::user()->team->id;
        $player->save();

        return redirect("/players/$player->id");
    }

    public function transfers(Player $player)
    {
        $transferi = Transfer::query()->where('player_id', $player->id)->get();
        $i = 1;

        return view('players.transfers', ['transferi'=>$transferi, 'i'=>$i, 'player'=>$player]);
    }
}
