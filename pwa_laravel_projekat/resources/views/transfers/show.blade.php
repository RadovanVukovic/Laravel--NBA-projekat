@extends('layouts.app')

@section('content')

    <div class="row mb-2">
        <h2 class="text-primary"> Transferi kluba {{$team->name}} </h2>
    </div>
    <div class="row">
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
                    @if($team->name == $transfer->teamFrom->name )
                        <td style="color: aqua">{{$transfer->teamFrom->name}}</td>
                    @else
                        <td>{{$transfer->teamFrom->name}}</td>
                    @endif

                    @if($team->name == $transfer->teamTo->name )
                        <td style="color: aqua">{{$transfer->teamTo->name}}</td>
                    @else
                        <td>{{$transfer->teamTo->name}}</td>
                    @endif
                        <td>{{$transfer->date}}</td>
                        <td>{{$transfer->money}} $</td>
                </tr>

            @endforeach

        </table>
    </div>
@endsection
