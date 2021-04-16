@extends('layouts.app')

@section('content')
    <div class="row">
        <h2 class="text-primary mb-3">TOP 10 IGRAČA NBA LIGE</h2>
        <table class="table-dark table-bordered table table-hover">
            <tr class="bg-primary">
                <th>Redni broj</th>
                <th>Ime</th>
                <th>Pozicija</th>
                <th>Klub</th>
                <th>Godine</th>
                <th>Visina</th>
                <th>Tezina</th>
                <th>AVG poeni</th>
                <th>AVG asistencije</th>
                <th>AVG skokovi</th>
            </tr>

            @foreach($players as $player)

            <tr>
                @if(Auth::check())
                    @if($player->team->name == Auth::user()->team->name)
                        <td style="color: aqua">{{$i++}}</td>
                        <td class="col-md-3" style="text-align: left; color: aqua"><img class="d-sm-none d-none d-md-inline-block" src="{{$player->img_url}}" style="width: 70px" alt=""> {{$player->name}}</td>
                        <td style="color: aqua">{{$player->position->name}}</td>
                        <td style="color: aqua">{{$player->team->name}}</td>
                        <td style="color: aqua"> {{$player->years}}</td>
                        <td style="color: aqua">{{$player->height}} cm</td>
                        <td style="color: aqua">{{$player->weight}} kg</td>
                        <td style="color: aqua">{{$player->avg_points}}</td>
                        <td style="color: aqua">{{$player->avg_assist}}</td>
                        <td style="color: aqua">{{$player->avg_rebounds}}</td>
                    @else
                        <td>{{$i++}}</td>
                        <td class="col-md-3" style="text-align: left;"><img class="d-sm-none d-none d-md-inline-block" src="{{$player->img_url}}" style="width: 70px" alt=""> {{$player->name}}</td>
                        <td>{{$player->position->name}}</td>
                        <td>{{$player->team->name}}</td>
                        <td>{{$player->years}}</td>
                        <td>{{$player->height}} cm</td>
                        <td>{{$player->weight}} kg</td>
                        <td>{{$player->avg_points}}</td>
                        <td>{{$player->avg_assist}}</td>
                        <td>{{$player->avg_rebounds}}</td>
                    @endif
                @else
                    <td>{{$i++}}</td>
                    <td style="text-align: left;"><img class="d-sm-none d-none d-md-inline-block" src="{{$player->img_url}}" style="width: 70px" alt=""> {{$player->name}}</td>
                    <td>{{$player->position->name}}</td>
                    <td>{{$player->team->name}}</td>
                    <td>{{$player->years}}</td>
                    <td>{{$player->height}} cm</td>
                    <td>{{$player->weight}} kg</td>
                    <td>{{$player->avg_points}}</td>
                    <td>{{$player->avg_assist}}</td>
                    <td>{{$player->avg_rebounds}}</td>
                @endif

            </tr>
            @endforeach

        </table>
    </div>

@endsection
