<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('teams.index', ['teams'=>$teams]);
    }

    public function show(Team $team)
    {
        $brojac = 0;
        $pozicije = ["Plejmejker", "Bek suter", "Krilo" , "Krilni centar" , "Centar"];

        return view('teams.show', ['team' => $team, 'brojac'=>$brojac, 'pozicije'=>$pozicije]);
    }


}

