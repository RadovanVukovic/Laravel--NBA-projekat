@extends('layouts.app')

@section('content')

    <div class="row">
        <h2 class="text-primary"> ODIGRANE UTAKMICE NBA LIGE </h2>
    </div>

    <div class="row">
        <table class="table-dark table-borderless table-hover table-striped table">

            <thead>
            <tr class="bg-primary">
                <th>HOME</th>
                <th colspan="3" >SCORE</th>
                <th>AWAY</th>
                <th>DATE</th>
                <th>TIME</th>
                <th>STADIUM</th>
                <th>PREGLED</th>
            </tr>
            </thead>

            @foreach($games as $game)


                    <tr>

                            @if(Auth::check())
                                @if($game->team_home->name == Auth::user()->team->name )
                                    <td style="color: aqua"> {{$game->team_home->name}}</td>
                                @else
                                    <td>{{$game->team_home->name}}</td>
                                @endif

                                <td>{{$game->points_home}}</td>
                                <td>:</td>
                                <td>{{$game->points_away}}</td>

                                @if($game->team_away->name == Auth::user()->team->name )
                                    <td style="color: aqua">{{$game->team_away->name}}</td>
                                @else
                                    <td>{{$game->team_away->name}}</td>
                                @endif
                            @else
                                <td>{{$game->team_home->name}}</td>
                                <td>{{$game->points_home}}</td>
                                <td>:</td>
                                <td>{{$game->points_away}}</td>
                                <td>{{$game->team_away->name}}</td>
                            @endif
                            <td>{{$game->date}}</td>
                            <td>{{$game->time}}</td>
                            <td>{{$game->stadium->name}}</td>
                            <td><a href="/games/{{$game->id}}"> <button class="btn btn-primary">STATISTIKA UTAKMICE </button> </a> </td>

                    </tr>

            @endforeach

        </table>
    </div>

@endsection
