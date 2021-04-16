<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function show(Team $team)
    {

        $transfers = $team->transfersFrom->concat($team->transfersTo)->sortBy('date');
        $i = 1;
        return view('transfers.show', ['transfers'=>$transfers, 'team'=>$team ,'i'=>$i]);

    }
}
