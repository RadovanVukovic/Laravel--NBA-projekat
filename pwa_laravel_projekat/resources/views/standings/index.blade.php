@extends('layouts.app')


@section('content')
    <div class="row mb-3">
        <h2 class="text-primary">TABELA NBA LIGE</h2>
    </div>

    <div class="row">
        <table class="table-dark table-bordered table table-hover">
            <tr class="bg-primary">
                <th>Pozicija</th>
                <th>Klub</th>
                <th>Odigrane utakmice</th>
                <th>Pobeda</th>
                <th>Gubitak</th>
                <th>Kosevi +/-</th>
            </tr>

            @foreach($tabela as $redTabele)

                <tr>
                    <td>{{$redTabele->position}}</td>
                    @if(Auth::check())
                        @if($redTabele->team->name == Auth::user()->team->name)
                            <td style="color: aqua" class="col-md-3">   {{$redTabele->team->name}}</td>
                        @else
                            <td class="col-md-3">{{$redTabele->team->name}}</td>
                        @endif
                    @else
                        <td class="col-md-3">{{$redTabele->team->name}}</td>
                    @endif
                    <td class="col-md-1">{{$redTabele->games_played}}</td>
                    <td>{{$redTabele->games_won}}</td>
                    <td>{{$redTabele->games_lost}}</td>
                    <td>{{$redTabele->scored_received}}</td>
                    <td class="col-md-2"><a href="/teams/{{$redTabele->team->id}}"> <button class="btn btn-primary"> PROFIL KLUBA </button></a> </td>

                </tr>
            @endforeach
        </table>
    </div>

@endsection
