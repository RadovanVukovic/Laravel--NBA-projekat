@extends('layouts.app')

@section('content')
    <div class="row mx-auto">
        <div class="col-md-5 col-sm-10">
            <img class="rounded-circle" src="{{$player->img_url}}" alt="">
        </div>

        <div class="col-md-4 col-sm-6">
            <h2 class="text-primary"> IME </h2>
            <h1> {{$player->name}} </h1>
            <h2 class="text-primary"> POZICIJA </h2>
            <h1> {{$player->position->name}} </h1>
            <h2 class="text-primary"> KLUB </h2>
            @if($player->free == '1')
                <h1>SLOBODAN</h1>
            @else
                <h1>{{$player->team->name}}</h1>
            @endif


        </div>
        <div class="col-md-3 col-sm-6">
            <h2 class="text-primary"> GODINE </h2>
            <h1> {{$player->years}} </h1>
            <h2 class="text-primary"> VISINA </h2>
            <h1> {{$player->height}} m </h1>
            <h2 class="text-primary"> TEŽINA </h2>
            <h1> {{$player->weight}} kg </h1>
        </div>
    </div>
    <div class="row mt-3 mx-auto">
        <div class="col-md-5 col-sm-10">
            <h2 class="text-primary"> AVG POENI </h2>
            <h1> {{$player->avg_points}} </h1>
            <h2 class="text-primary"> AVG ASISTENCIJE </h2>
            <h1> {{$player->avg_assist}} </h1>
            <h2 class="text-primary"> AVG SKOKOVI </h2>
            <h1> {{$player->avg_rebounds}} </h1>
        </div>
        <div class="col-md-7">
            <a href="/players/transfers/{{$player->id}}">
                <button class="btn btn-primary btn-lg btn-block">
                    TRANSFERI IGRAČA
                </button>
            </a>

            <br>
            @if(\Illuminate\Support\Facades\Auth::check())
                @if(\Illuminate\Support\Facades\Auth::user()->team->id == $player->team->id)

                    @if($player->free == '0')
                        <a href="/players/{{$player->id}}/edit">
                            <button class="btn btn-primary btn-lg btn-block">UREDI IGRACA</button>
                        </a>
                        <form method="POST" action="/players/{{$player->id}}/fire">
                            @method('PUT')
                            @csrf

                            <input type="submit" class="btn btn-danger btn-lg btn-block mt-4" value="OTPUSTI IGRACA">
                        </form>
                    @endif

                @endif
            @endif
        </div>
    </div>





@endsection

