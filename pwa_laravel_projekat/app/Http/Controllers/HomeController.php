<?php

namespace App\Http\Controllers;

use App\Game;
use App\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tim = Auth::user()->team->id;
        $games = Game::query()->where('team_id_home', $tim )->orWhere('team_id_away', $tim)->get();

        $transfers = Transfer::query()->where('team_id_from', $tim)->orWhere('team_id_to', $tim)->get();
        $i = 1;
        $brojac = 0;

        $pozicije = ["Plejmejker", "Bek suter", "Krilo" , "Krilni centar" , "Centar"];

        return view('home', ['games'=>$games, 'transfers'=>$transfers, 'i'=>$i, 'brojac'=>$brojac, 'pozicije'=>$pozicije]);
    }
}
