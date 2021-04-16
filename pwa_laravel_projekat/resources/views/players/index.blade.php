@extends('layouts.app')


@section('content')

    <div class="row">

    @foreach($players as $player)
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="row">

                <div class="col-md-12">
                    <a href="/players/{{$player->id}}">
                        <img src="{{ $player->img_url }}" width="200px" alt="">
                    </a>
                    <h4 class="text-primary">IME</h4>
                    <h4>{{$player->name}}</h4>
                    <h4 class="text-primary">TIM</h4>
                    <h4>{{$player->team->name}}</h4>
                    <a href="/players/{{$player->id}}">
                        <button class="btn btn-primary btn-block btn-lg"> PROFIL IGRAČA </button>
                    </a>
                </div>
            </div>
        </div>

    @endforeach

    </div>
@endsection

