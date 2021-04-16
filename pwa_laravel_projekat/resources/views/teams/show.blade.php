@extends('layouts.app')

@section('content')
    <div class="row mx-auto">
        <div class="col-md-5 col-sm-10">
            <img style="width: 240px; height: 200px" src="{{$team->img_url}}" alt="">
        </div>

        <div class="col-md-4 col-sm-6">
            <h2 class="text-primary"> NAZIV </h2>
            <h1> {{$team->name}} </h1>
            <h2 class="text-primary"> MENADŽER </h2>
            <h1> {{$team->manager->name}} </h1>
        </div>
        <div class="col-md-3 col-sm-6">

            <h2 class="text-primary"> OSNOVAN </h2>
            <h1> {{$team->founded}} </h1> <h2 class="text-primary"> POZICIJA </h2>
            <h1> {{$team->standings->position}} </h1>

        </div>
    </div>
    <div class="row mt-3 mx-auto">
        <div class="col-md-3">
            <div class="col-md-12 col-sm-6">
                <h3 class="text-primary">BROJ UTAKMICA</h3>
                <h1> {{$team->standings->games_played}} </h1>

                <h3 class="text-primary">POBEDA</h3>
                <h1> {{$team->standings->games_won}} </h1>
            </div>
            <div class="col-md-12 col-sm-6">
                <h3 class="text-primary">PORAZ</h3>
                <h1> {{$team->standings->games_lost}} </h1>

                <h3 class="text-primary">KOŠEVI +/-</h3>
                <h1> {{$team->standings->scored_received}} </h1>
            </div>
        </div>
        <div class="col-md-9">
                <div class="col-md-12">
                    <h2 class="text-primary"> IGRAČI </h2>
                </div>
                <div class="row">
                    @foreach($team->players as $igrac)
                        <div class="col-md-2 col-sm-4 col-6 mb-2">
                            <a href="/players/{{$igrac->id}}">
                                <img src="{{$igrac->img_url}}" style="width: 150px" alt="">
                            </a>
                            <div style="display: none">
                                {{$brojac++}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    @if(count($team->players) < 5 )
                        <div class="ml-4">
                            <h4 class="text-primary"> NEMATE KOMPLETAN TIM! </h4>
                            <h4 class="text-primary"> BROJ IGRACA KOJI NEDOSTAJE : <span style="color: red"> {{5 - $brojac}} </span> </h4>
                            <h4 class="text-primary"> POPUNJENE POZICIJE:
                                @foreach($team->players as $igrac)
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
                <div class="row mt-5">
                    <div class="col-md-4">

                        <a href="/transfers/{{$team->id}}">
                            <button class="btn btn-primary btn-lg btn-block mb-3">
                                TRANSFERI KLUBA
                            </button>
                        </a>
                    </div>
                    <div class="col-md-4">

                        <a href="/standings">
                            <button class="btn btn-primary btn-lg btn-block mb-3">
                                TABELA LIGE
                            </button>
                        </a>
                    </div>
                    <div class="col-md-4">

                        <a href="/schedule/{{$team->id}}">
                            <button class="btn btn-primary btn-lg btn-block mb-3">
                                RASPORED KLUBA
                            </button>
                        </a>

                    </div>
                </div>
        </div>

    </div>


{{--        <div class="col-md-7">--}}




{{--        </div>--}}
{{--    </div>--}}





@endsection


