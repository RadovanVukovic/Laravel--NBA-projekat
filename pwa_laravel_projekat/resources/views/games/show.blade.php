@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-auto justify-content-center">
            <h1 class="col-md-4 text-md-center font-weight-bold"><a style="text-decoration: none; color: black ;" href="/teams/{{$game->team_home->id}}"> {{$game->team_home->name}} </a></h1>
            <h1 class="col-md-4 text-md-center text-left font-weight-bold">{{$game->points_home}} <span> : </span> {{$game->points_away}}</h1>
            <h1 class="col-md-4 font-weight-bold"><a style="text-decoration: none; color: black ;" href="/teams/{{$game->team_away->id}}"> {{$game->team_away->name}} </a></h1>
        </div>
        <br>

        <div class="row mx-auto justify-content-center">
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: #1b4b72"> HOME: </span> {{$game->statisticsHome->two_point_scored}}/{{$game->statisticsHome->two_point_shots}} ({{round($game->statisticsHome->percentage_two_point, 1)}}%)</h3>
            <h3 class="col-md-4 text-md-center text-left"> ŠUTEVI ZA DVA POENA</h3>
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: red"> AWAY: </span> {{$game->statisticsAway->two_point_scored}}/{{$game->statisticsAway->two_point_shots}} ({{round($game->statisticsAway->percentage_two_point,1)}}%)</h3>
        </div>

        <div class="row">
            <div class="progress col-md-5 @if($game->statisticsHome->percentage_two_point > $game->statisticsAway->percentage_two_point) progress-bar-animated progress-bar-striped @endif p-0 d-sm-none d-none d-md-flex" style="height: 25px; background-color: #3490dc">
                <div class="progress-bar" style="background-color: #e9ecef; width: {{100 - $game->statisticsHome->percentage_two_point}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="progress col-md-5 p-0 d-sm-none d-none d-md-flex" style="height: 25px;">
                <div class="progress-bar bg-danger @if($game->statisticsAway->percentage_two_point > $game->statisticsHome->percentage_two_point) progress-bar-animated progress-bar-striped @endif " style="width: {{$game->statisticsAway->percentage_two_point}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <br>
        <br>
        <div class="row mx-auto justify-content-center">
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: #1b4b72"> HOME: </span> {{$game->statisticsHome->three_point_scored}}/{{$game->statisticsHome->three_point_shots}} ({{round($game->statisticsHome->percentage_three_point,1)}}%)</h3>
            <h3 class="col-md-4 text-md-center text-left"> ŠUTEVI ZA TRI POENA</h3>
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: red"> AWAY: </span> {{$game->statisticsAway->three_point_scored}}/{{$game->statisticsAway->three_point_shots}} ({{round($game->statisticsAway->percentage_three_point,1)}}%)</h3>
        </div>

        <div class="row">
            <div class="progress col-md-5 @if($game->statisticsHome->percentage_three_point > $game->statisticsAway->percentage_three_point) progress-bar-animated progress-bar-striped @endif p-0 d-sm-none d-none d-md-flex" style="height: 25px; background-color: #3490dc">
                <div class="progress-bar" style="background-color: #e9ecef; width: {{100 - $game->statisticsHome->percentage_three_point}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="progress col-md-5 p-0 d-sm-none d-none d-md-flex" style="height: 25px;">
                <div class="progress-bar bg-danger @if($game->statisticsAway->percentage_three_point > $game->statisticsHome->percentage_three_point) progress-bar-animated progress-bar-striped @endif " style="width: {{$game->statisticsAway->percentage_three_point}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <br>
        <br>
        <div class="row mx-auto justify-content-center">
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: #1b4b72"> HOME: </span> {{$game->statisticsHome->free_throw_scored}}/{{$game->statisticsHome->free_throw_shots}} ({{round($game->statisticsHome->percentage_free_throw,1)}}%)</h3>
            <h3 class="col-md-4 text-md-center text-left"> SLOBODNA BACANJA</h3>
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: red"> AWAY: </span> {{$game->statisticsAway->free_throw_scored}}/{{$game->statisticsAway->free_throw_shots}} ({{round($game->statisticsAway->percentage_free_throw,1)}}%)</h3>
        </div>

        <div class="row">
            <div class="progress col-md-5 @if($game->statisticsHome->percentage_free_throw > $game->statisticsAway->percentage_free_throw) progress-bar-animated progress-bar-striped @endif p-0 d-sm-none d-none d-md-flex" style="height: 25px; background-color: #3490dc">
                <div class="progress-bar" style="background-color: #e9ecef; width: {{100 - $game->statisticsHome->percentage_free_throw}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="progress col-md-5 p-0 d-sm-none d-none d-md-flex" style="height: 25px;">
                <div class="progress-bar bg-danger @if($game->statisticsAway->percentage_free_throw > $game->statisticsHome->percentage_free_throw) progress-bar-animated progress-bar-striped @endif " style="width: {{$game->statisticsAway->percentage_free_throw}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <br>
        <br>
        <div class="row mx-auto justify-content-center">
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: #1b4b72"> HOME: </span> {{$game->statisticsHome->fouls}} / {{$game->statisticsAway->fouls + $game->statisticsHome->fouls}} ({{round($game->statisticsHome->fouls / ($game->statisticsAway->fouls + $game->statisticsHome->fouls)* 100)}}%)</h3>
            <h3 class="col-md-4 text-md-center text-left"> FAULOVI</h3>
            <h3 class="col-md-4 text-md-center"> <span class="d-md-none" style="color: red"> AWAY: </span> {{$game->statisticsAway->fouls}} / {{$game->statisticsAway->fouls + $game->statisticsHome->fouls}} ({{round($game->statisticsAway->fouls / ($game->statisticsAway->fouls + $game->statisticsHome->fouls)* 100)}}%)</h3>
        </div>

        <div class="row">
            <div class="progress col-md-5 @if($game->statisticsHome->fouls > $game->statisticsAway->fouls) progress-bar-animated progress-bar-striped @endif p-0 d-sm-none d-none d-md-flex" style="height: 25px; background-color: #3490dc">
                <div class="progress-bar" style="background-color: #e9ecef; width: {{ round($game->statisticsHome->fouls / ($game->statisticsAway->fouls + $game->statisticsHome->fouls)* 100 )}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="col-md-2"></div>
            <div class="progress col-md-5 p-0 d-sm-none d-none d-md-flex" style="height: 25px;">
                <div class="progress-bar bg-danger @if($game->statisticsAway->fouls > $game->statisticsHome->fouls) progress-bar-animated progress-bar-striped @endif " style="width: {{round($game->statisticsAway->fouls / ($game->statisticsAway->fouls + $game->statisticsHome->fouls)* 100)}}%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <h2 class="text-primary">STATISTIKA IGRAČA</h2>
        </div>
        <div class="row">

            <table class="table-dark table-bordered table table-hover ">
                <tr class="bg-primary">
                    <th>Igrac</th>
                    <th>Klub</th>
                    <th>Pozicija</th>
                    <th>Poeni</th>
                    <th>Asistencije</th>
                    <th>Skokovi</th>
                </tr>

                @foreach($game->players as $igrac)

                    <tr>
                        <td class="col-md-3" style="text-align: left;"><img class="d-sm-none d-none d-md-inline-block" src="{{$igrac->img_url}}" style="width: 70px" alt=""> {{$igrac->name}}</td>
                        <td class="col-md-2">{{$igrac->team->name}}</td>
                        <td class="col-md-2">{{$igrac->position->name}}</td>
                        <td>{{$igrac->player_statistics->points}}</td>
                        <td class="col-md-1">{{$igrac->player_statistics->assists}}</td>
                        <td class="col-md-1">{{$igrac->player_statistics->rebounds}}</td>
                        <td><a href="/players/{{$igrac->id}}"> <button class="btn btn-primary"> PROFIL IGRACA </button></a> </td>
                    </tr>

                @endforeach

            </table>

        </div>

    </div>
@endsection



