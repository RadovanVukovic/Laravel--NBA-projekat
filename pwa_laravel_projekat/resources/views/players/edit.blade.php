@extends('layouts.app')

<! ––OVO JE POCETAK ––>
@section('content')
    <div class="container mx-auto">
        <div class="row mx-auto">
            <div class="col-md-5 col-sm-10">
                <img class="rounded-circle" src="{{$player->img_url}}" alt="">
                <h2 class="text-primary"> IME </h2>
                <h1> {{$player->name}} </h1>
                <h2 class="text-primary"> POZICIJA </h2>
                <h1> {{$player->position->name}} </h1>
                <h2 class="text-primary"> KLUB </h2>
                <h1> {{$player->team->name}} </h1>
            </div>
            <div class="col-md-7">
                <form method="POST" action="/players/{{$player->id}}" >
                    @csrf
                    @method('PUT')

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h5> <label for="height"  class="text-primary font-weight-bold" >  Visina </label> </h5>
                            <input type="number" class="form-control" aria-describedby="visina_opis" step=".01"  name="height" id="height" value="{{$player->height}}">
                            <small id="visina_opis" class="form-text text-muted">Visina igraca mora biti izmedju 1.60m i 2.50m.</small>
                            @error('height')
                            <h6 style="color: red"> {{ $message }}</h6>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <h5> <label for="avg_points"  class="text-primary font-weight-bold" >  Prosečni poeni </label> </h5>
                            <input type="number" step=".01" class="form-control"  name="avg_points" id="avg_points" value="{{$player->avg_points}}">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h5> <label for="weight"  class="text-primary font-weight-bold" >  Tezina </label> </h5>
                            <input type="number" class="form-control" aria-describedby="tezina_opis" step=".01"  name="weight" id="weight" value="{{$player->weight}}">
                            <small id="tezina_opis" class="form-text text-muted">Tezina igraca mora biti izmedju 60kg i 200kg.</small>
                            @error('weight')
                            <h6 style="color: red"> {{ $message }}</h6>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <h5> <label for="avg_assist"  class="text-primary font-weight-bold" >  Prosečne asistencije </label> </h5>
                            <input type="number" step=".01" class="form-control" name="avg_assist" id="avg_assist" value="{{$player->avg_assist}}">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h5> <label for="years"  class="text-primary font-weight-bold" >  Godine </label> </h5>
                            <input type="number" class="form-control" aria-describedby="godine_opis"  name="years" id="years" value="{{$player->years}}">
                            <small id="godine_opis" class="form-text text-muted">Godine igrača moraju biti izmedju 15 i 50.</small>
                            @error('years')
                            <h6 style="color: red"> {{ $message }}</h6>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <h5> <label for="avg_rebounds"  class="text-primary font-weight-bold" >  Prosečni skokovi </label> </h5>
                            <input type="number" class="form-control" step=".01" name="avg_rebounds" id="avg_rebounds" value="{{$player->avg_rebounds}}">
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <h5> <label for="positions"  class="text-primary font-weight-bold" >  Promeni poziciju </label> </h5>
                            <select class="form-control"  name="position" id="positions">
                                @foreach($positions as $position)
                                    <option
                                        @if($player->position->id == $position->id)
                                            value="NULL"
                                            selected
                                        @endif
                                        value="{{$position->id}}"
                                    >

                                        {{$position->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <h5> <label for="teams"  class="text-primary font-weight-bold" > Transfer igrača </label> </h5>
                            <select class="form-control"  name="team" id="teams">
                                @foreach($teams as $team)
                                    <option
                                        @if($player->team->id == $team->id)
                                        value="NULL"
                                        selected
                                        @endif
                                        value="{{$team->id}}"
                                    >

                                        {{$team->name}}

                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="POTVRDI IZMENE">
                </form>
            </div>
        </div>
    </div>
@endsection
   <! ––  OVO JE KRAJ   ––>



