<?php

namespace App\Http\Controllers;

use App\Standings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StandingsController extends Controller
{
    public function index()
    {
        $tabela = Standings::all();

        return view('standings.index', ['tabela'=>$tabela]);
    }
}
