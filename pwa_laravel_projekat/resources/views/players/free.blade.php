@extends('layouts.app')

@section('content')


    @if(count($players) > 0)
        <div class="row">
            <div class="col-md-10 p-0 mb-3">
                <h2 class="text-primary">LISTA SVIH SLOBODNIH IGRAČA</h2>
            </div>
            <table class="table-dark table-bordered table table-hover">
                    <tr class="bg-primary">
                        <th>Redni broj</th>
                        <th>Ime</th>
                        <th>Pozicija</th>
                        <th>Godine</th>
                        <th>Visina</th>
                        <th>Tezina</th>
                        <th>AVG poeni</th>
                        <th>AVG asistencije</th>
                        <th>AVG skokovi</th>
                    </tr>

                    @foreach($players as $player)

                        <tr>
                            <td>{{$i++}}</td>
                            <td style="text-align: left;"><img class="d-sm-none d-none d-md-inline-block" src="{{$player->img_url}}" style="width: 70px" alt=""> {{$player->name}}</td>
                            <td>{{$player->position->name}}</td>
                            <td>{{$player->years}}</td>
                            <td>{{$player->height}} cm</td>
                            <td>{{$player->weight}} kg</td>
                            <td>{{$player->avg_points}}</td>
                            <td>{{$player->avg_assist}}</td>
                            <td>{{$player->avg_rebounds}}</td>
                            <td>

                                <form method="POST" action="/players/{{$player->id}}/add">
                                    @method('PUT')
                                    @csrf

                                    <input type="submit" class="btn btn-primary" value="DODAJ IGRACA U KLUB">
                                </form>

                            </td>


                        </tr>


                    @endforeach

                </table>
        </div>
    @else
        <div class="row mx-auto">
            <h1>Zao nam je, trenutno nema slobodnih igraca na raspolaganju!</h1>

        </div>
        <div class="row mt-4">
            <div class="col-md-4 mt-4">
                <a href="/players">
                    <button class="btn btn-primary btn-block btn-lg"> VRATI SE NA STRANICU SVIH IGRACA </button>
                </a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="/teams">
                    <button class="btn btn-primary btn-block btn-lg"> VRATI SE NA STRANICU SVIH KLUBOVA </button>
                </a>
            </div>
        </div>

    @endif

@endsection
