@extends('layouts.app')

@section('content')

    <div class="row">

        @foreach($teams as $team)
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="row">

                    <div class="col-md-12">
                        <a href="/teams/{{$team->id}}">
                            <img src="{{ $team->img_url }}" style="width: 190px; height: 150px" alt="">
                        </a>
                        <h4 class="text-primary">Naziv</h4>
                        <h4>{{$team->name}}</h4>
                        <h4 class="text-primary">Godina osnivanja</h4>
                        <h4>{{$team->founded}}</h4>
                        <a href="/teams/{{$team->id}}">
                            <button class="btn btn-primary btn-block btn-lg"> PROFIL KLUBA </button>
                        </a>
                    </div>
                </div>
            </div>

        @endforeach

    </div>

@endsection
