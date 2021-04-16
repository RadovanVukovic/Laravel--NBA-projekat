@extends('layouts.app')


@section('content')

    <div class="row mb-2">
        <h2 class="text-primary">RASPORED UTAKMICA NBA LIGE</h2>
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
                    @if(Auth::check())
                        @if($utakmica->teamHome->name == Auth::user()->team->name )
                            <td style="color: aqua">{{$utakmica->teamHome->name}}</td>
                        @else
                            <td>{{$utakmica->teamHome->name}}</td>
                        @endif

                        @if($utakmica->teamAway->name == Auth::user()->team->name )
                            <td style="color: aqua">{{$utakmica->teamAway->name}}</td>
                        @else
                            <td>{{$utakmica->teamAway->name}}</td>
                        @endif
                    @else
                        <td>{{$utakmica->teamHome->name}}</td>
                        <td>{{$utakmica->teamAway->name}}</td>
                    @endif
                    <td>{{$utakmica->date}}</td>
                    <td>{{$utakmica->time}}</td>
                    <td>{{$utakmica->stadium->name}}</td>
                </tr>

            @endforeach

        </table>
    </div>

@endsection
