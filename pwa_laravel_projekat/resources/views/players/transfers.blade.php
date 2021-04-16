@extends('layouts.app')


@section('content')

    <div class="row mx-auto">
        @if(count($transferi) > 0)
            <h2 class="text-primary">TRANSFERI IGRAČА</h2>
            <table class="table-dark table-bordered table">
                <tr>
                    <th>Redni broj</th>
                    <th>Ime igraca</th>
                    <th>Odlazni tim</th>
                    <th>Dolazni tim</th>
                    <th>Datum transfera</th>
                    <th>Kolicina novca</th>
                </tr>

                @foreach($transferi as $transfer)

                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$transfer->player->name}}</td>
                        <td>{{$transfer->teamFrom->name}}</td>
                        <td>{{$transfer->teamTo->name}}</td>
                        <td>{{$transfer->date}}</td>
                        <td>{{$transfer->money}} $</td>
                    </tr>

                @endforeach

            </table>
        @else
            <h2 class="mx-auto">Nema podataka o transferima ovog igrača!</h2>
            <div class="col-md-12">

                <div class="col-md-6 mt-4 mx-auto">
                    <a href="/players">
                        <button class="btn btn-primary btn-block btn-lg"> VRATI SE NA STRANICU SVIH IGRACA </button>
                    </a>
                </div>


                <div class="col-md-6 mt-4 mx-auto">
                    <a href="/teams">
                        <button class="btn btn-primary btn-block btn-lg"> VRATI SE NA STRANICU SVIH KLUBOVA </button>
                    </a>
                </div>

                <div class="col-md-6 mt-4 mx-auto">
                    <a href="/players/{{$player->id}}">
                        <button class="btn btn-primary btn-block btn-lg"> PROFIL {{$player->name}} </button>
                    </a>
                </div>

            </div>
        @endif

    </div>
@endsection
