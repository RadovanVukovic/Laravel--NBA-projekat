<?php

use App\Game;
use App\Manager;
use App\Position;
use App\Standings;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Player;
use App\Team;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('test', function () {

    $pozicije = ['Plejmejker', 'Bek suter', 'Krilo' , 'Krilni centar' , 'Centar'];
    foreach ($pozicije as $p)
    {
        dd($p);
    }
    //unset($pozicije[0]);
    $igrac = Player::query()->find(1);
    dd($igrac->position->name);


})->describe('Test ');

//---------------


Artisan::command('reminder', function () {

    $this->comment("IGRANJE UTAKMICE JE ZAVRSENO! Sve sljaka, ostalo je samo da se odradi front");
})->describe('Ispisuje podsetnik do koje stavke se stiglo u razvijanju projekta i sta se sve odradilo do sada');

