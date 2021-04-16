@extends('layouts.app')


@section('content')

@if(count($raspored)>0)
    <div class="row mb-2">
        <h2 class="text-primary">Raspored utakmica kluba {{$team->name}}</h2>
    </div>
    <div class="row">
        <table class="table-dark table-bordered table table-hover">
            <tr class="bg-primary">
                <th>Redni broj</th>
                <th>Domacin</th>
                <th>Gost</th>
                <th>Datum</th>
                <th>Vreme</th>
                <th>Stadion</th>
            </tr>

            @foreach($raspored as $utakmica)

                <tr>
                    <td>{{$i++}}</td>
                    @if($utakmica->teamHome->name == $team->name )
                        <td style="color: aqua">{{$utakmica->teamHome->name}}</td>
                    @else
                        <td>{{$utakmica->teamHome->name}}</td>
                    @endif

                    @if($utakmica->teamAway->name == $team->name )
                        <td style="color: aqua">{{$utakmica->teamAway->name}}</td>
                    @else
                        <td>{{$utakmica->teamAway->name}}</td>
                    @endif

                    <td>{{$utakmica->date}}</td>
                    <td>{{$utakmica->time}}</td>
                    <td>{{$utakmica->stadium->name}}</td>
                </tr>

            @endforeach

        </table>
    </div>
@else
    <div class="row mx-auto pl-5 mb-3">
        <h1>Ne postoji raspored utakmica za ovaj klub!</h1>
    </div>
    <div class="row pl-5 mb-4">
        <a href="/teams/{{$team->id}}">
            <button class="btn btn-primary btn-lg btn-block"> VRATI SE NA PROFIL KLUBA </button>
        </a>
    </div>
    <div class="row pl-5 mb-4">
        <a href="/teams/{{$team->id}}">
            <button class="btn btn-primary btn-lg btn-block"> RASPORED SVIH UTAKMICA </button>
        </a>
    </div>

@endif

@endsection
