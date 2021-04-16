@extends('layouts.app')


@section('content')

        <div class="row">

            <div class="col-md-5">
                <img src="{{$manager->img_url}}" alt="" style="border-radius: 5px 20px 5px; width: 250px;" >
            </div>
            <div class="col-md-4">
                <h2 class="text-primary mt-2">IME</h2>
                <h2>{{$manager->name}}</h2>
                <h2 class="text-primary">GODINE </h2>
                <h2> {{$manager->years}}</h2>
                <h2 class="text-primary">KLUB</h2>
                <h2> {{$manager->team->name}}</h2>
                <h2 class="text-primary">POZICIJA NA TABELI : <span style="color: #1b1e21"> {{$manager->team->standings->position}}</span></h2>
            </div>
            <div class="col-md-3">
                <div class="row mx-auto">
                    <a href="/teams/{{$manager->team->id}}">
                        <button class="btn btn-primary btn-lg btn-block">PREGLED KLUBA</button>
                    </a>
                </div>
                <div class="row mt-4 mx-auto">
                    <a href="/players/free">
                        <button class="btn btn-primary btn-lg btn-block">DODAJ IGRAČA U KLUB</button>
                    </a>
                </div>
                <div class="row mt-4 mx-auto">
                    <a href="/teams/{{$manager->team->id}}">
                        <button class="btn btn-danger btn-lg btn-block">OTPUSTI IGRAČE</button>
                    </a>
                </div>
                <div class="row mt-4 mx-auto">
                    <a href="/players/top-10">
                        <button class="btn btn-primary btn-lg btn-block">TOP 10 IGRAČA LIGE</button>
                    </a>
                </div>
                <div class="row mt-4 mx-auto">
                    <a href="/players/all-star">
                        <button class="btn btn-primary btn-lg btn-block">ALL-STAR TIM</button>
                    </a>
                </div>
            </div>
        </div>
@endsection
