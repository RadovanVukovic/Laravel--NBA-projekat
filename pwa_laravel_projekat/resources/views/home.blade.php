@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-5">
            <h1>Dobrodošli, {{Auth::user()->name}}</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-3">
            <h3 class="text-primary">VAŠ TIM</h3>
            <a href="/teams/{{Auth::user()->team->id}}">
                <img src="{{Auth::user()->team->img_url}}" style="width: 100px;" alt="">
            </a>
        </div>
        <div class="col-md-9">
            <div class="row">
                <h3 class="text-primary">VAŠI IGRAČI</h3>
            </div>
            <div class="row">

                @foreach(Auth::user()->team->players as $igrac)
                    <div class="col-md-2 col-sm-4 col-6 mb-2">
                        <a href="/players/{{$igrac->id}}">
                            <img src="{{$igrac->img_url}}" style="width: 150px" alt="">
                        </a>
                        <div style="display: none;">
                            {{$brojac++}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @if(count(Auth::user()->team->players) < 5 )
                    <div>
                        <h4 class="text-primary"> NEMATE KOMPLETAN TIM! </h4>
                        <h4 class="text-primary"> BROJ IGRACA KOJI NEDOSTAJE : <span style="color: red"> {{5 - $brojac}} </span> </h4>
                        <h4 class="text-primary"> POPUNJENE POZICIJE:
                        @foreach(Auth::user()->team->players as $igrac)
                            @foreach($pozicije as $pozicija)
                                @if($pozicija == $igrac->position->name)
                                    <h2 style="color: red"> {{$pozicija}} </h2>
                                @endif
                            @endforeach
                        @endforeach
                        </h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row mt-5">

        <div class="col-md-6">
            <h2 class="text-primary">UTAKMICE</h2>
        </div>
        @if(count($games)>0)
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

                            <td>{{$game->date}}</td>
                            <td>{{$game->time}}</td>
                            <td>{{$game->stadium->name}}</td>
                            <td><a href="/games/{{$game->id}}"> <button class="btn btn-primary">STATISTIKA UTAKMICE </button> </a> </td>

                    </tr>

                @endforeach

            </table>
        @else
            <h2>Trenutno nema odigranih utakmica ovog kluba!</h2>
        @endif
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h2 class="text-primary"> TRANSFERI KLUBA </h2>
        </div>
        @if(count($transfers)>0)
            <table class="table-dark table-bordered table">
                <tr class="bg-primary">
                    <th>Redni broj</th>
                    <th>Ime igraca</th>
                    <th>Odlazni tim</th>
                    <th>Dolazni tim</th>
                    <th>Datum transfera</th>
                    <th>Kolicina novca</th>
                </tr>

                @foreach($transfers as $transfer)

                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$transfer->player->name}}</td>
                        @if(Auth::user()->team->name == $transfer->teamFrom->name )
                            <td style="color: aqua">{{$transfer->teamFrom->name}}</td>
                        @else
                            <td>{{$transfer->teamFrom->name}}</td>
                        @endif

                        @if(Auth::user()->team->name == $transfer->teamTo->name )
                            <td style="color: aqua">{{$transfer->teamTo->name}}</td>
                        @else
                            <td>{{$transfer->teamTo->name}}</td>
                        @endif
                        <td>{{$transfer->date}}</td>
                        <td>{{$transfer->money}} $</td>
                    </tr>

                @endforeach

            </table>
        @else
            <h2>Trenutno nema nikakvih transfera...</h2>
        @endif
    </div>

</div>
@endsection
