<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Team;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function scheduleTeam(Team $team)
    {
        $raspored = $team->scheduleHome->concat($team->scheduleAway)->sortBy('date');
        $i = 1;

        return view('schedule.team', ['raspored'=>$raspored, 'i'=>$i, 'team'=>$team]);
    }

    public function schedule()
    {
        $raspored = Schedule::all()->sortBy('date');
        $i = 1;

        return view('schedule.all', ['raspored'=>$raspored, 'i'=>$i]);
    }
}
