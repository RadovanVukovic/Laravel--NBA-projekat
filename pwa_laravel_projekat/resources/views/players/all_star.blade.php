@extends('layouts.app')

@section('content')


    <div class="row mb-4 ">
        <div class="col-md-4 col-sm-10 col-8 mx-auto">
            <img src="/img/allstar.png" alt="" style="width: 200px">
            <h2 class="text-primary ml-2">ALL STAR TIM</h2>
        </div>
    </div>

    <div class="row">

        <div class="col-md-6 mt-4">
            <div class="list-group">
                <h1 class="text-primary">STARTERS</h1>
                <a href="/players/{{$plejmejkeri[0]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$plejmejkeri[0]->name}} ({{$plejmejkeri[0]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$plejmejkeri[0]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$plejmejkeri[0]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$plejmejkeri[0]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$plejmejkeri[0]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$plejmejkeri[0]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$plejmejkeri[0]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$plejmejkeri[0]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$plejmejkeri[0]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$plejmejkeri[0]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$plejmejkeri[0]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Najbolji plejmejker NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$bekSuteri[0]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$bekSuteri[0]->name}} ({{$bekSuteri[0]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$bekSuteri[0]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$bekSuteri[0]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$bekSuteri[0]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$bekSuteri[0]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$bekSuteri[0]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$bekSuteri[0]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$bekSuteri[0]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$bekSuteri[0]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$bekSuteri[0]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$bekSuteri[0]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Najbolji bek šuter NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$krila[0]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$krila[0]->name}} ({{$krila[0]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$krila[0]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$krila[0]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$krila[0]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$krila[0]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$krila[0]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$krila[0]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$krila[0]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$krila[0]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$krila[0]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$krila[0]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Najbolje krilo NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$krilniCentri[0]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$krilniCentri[0]->name}} ({{$krilniCentri[0]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$krilniCentri[0]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$krilniCentri[0]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$krilniCentri[0]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$krilniCentri[0]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$krilniCentri[0]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$krilniCentri[0]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$krilniCentri[0]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$krilniCentri[0]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$krilniCentri[0]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$krilniCentri[0]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Najbolji krilni centar NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$centri[0]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$centri[0]->name}} ({{$centri[0]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$centri[0]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$centri[0]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$centri[0]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$centri[0]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$centri[0]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$centri[0]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$centri[0]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$centri[0]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$centri[0]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$centri[0]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Najbolji centar NBA lige 2020 godine.</small>
                </a>

            </div>
        </div>

        <div class="col-md-6 mt-4">
            <div class="list-group">
                <h1 class="text-primary">REZERVE</h1>
                <a href="/players/{{$plejmejkeri[1]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$plejmejkeri[1]->name}} ({{$plejmejkeri[1]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$plejmejkeri[1]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$plejmejkeri[1]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$plejmejkeri[1]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$plejmejkeri[1]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$plejmejkeri[1]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$plejmejkeri[1]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$plejmejkeri[1]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$plejmejkeri[1]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$plejmejkeri[1]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$plejmejkeri[1]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Rezerva plejmejkera u All Star timu NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$bekSuteri[1]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$bekSuteri[1]->name}} ({{$bekSuteri[1]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$bekSuteri[1]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$bekSuteri[1]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$bekSuteri[1]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$bekSuteri[1]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$bekSuteri[1]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$bekSuteri[1]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$bekSuteri[1]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$bekSuteri[1]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$bekSuteri[1]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$bekSuteri[1]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Rezerva bek šutera u All Star timu NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$krila[1]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$krila[1]->name}} ({{$krila[1]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$krila[1]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$krila[1]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$krila[1]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$krila[1]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$krila[1]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$krila[1]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$krila[1]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$krila[1]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$krila[1]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$krila[1]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Rezerva pozicije krilo u All Star timu NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$krilniCentri[1]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$krilniCentri[1]->name}} ({{$krilniCentri[1]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$krilniCentri[1]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$krilniCentri[1]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$krilniCentri[1]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$krilniCentri[1]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$krilniCentri[1]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$krilniCentri[1]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$krilniCentri[1]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$krilniCentri[1]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$krilniCentri[1]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$krilniCentri[1]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Rezerva krilnog centra u All Star timu NBA lige 2020 godine.</small>
                </a>

                <a href="/players/{{$centri[1]->id}}" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1 font-weight-bold">{{$centri[1]->name}} ({{$centri[1]->team->name}})</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mr-4 col-sm-2 col-3">
                            <img src="{{$centri[1]->img_url}}" class="rounded-circle" style="width: 100px" alt="">
                        </div>
                        <div class="col-md-6 col-sm-4 col-6">
                            <p class="m-0">AVG Poeni: <span class="font-weight-bold"> {{$centri[1]->avg_points}} </span></p>
                            <p class="m-0">AVG Asist: <span class="font-weight-bold"> {{$centri[1]->avg_assist}} </span></p>
                            <p>AVG Skokovi: <span class="font-weight-bold"> {{$centri[1]->avg_rebounds}} </span></p>
                        </div>
                        <div class="col-md-3 mr-4  col-sm-3">
                            <p class="m-0">Visina: <span class="font-weight-bold"> {{$centri[1]->height}} m </span></p>
                            <p class="m-0">Tezina: <span class="font-weight-bold"> {{$centri[1]->weight}} kg </span></p>
                            <p>Godine: <span class="font-weight-bold"> {{$centri[1]->years}} </span></p>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <p class="m-0">Pozicija: <span class="font-weight-bold"> {{$centri[1]->position->name}} </span></p>
                            <p class="m-0">Klub: <span class="font-weight-bold"> {{$centri[1]->team->name}} </span></p>
                            <p class="m-0">Učinak: <span class="font-weight-bold"> {{$centri[1]->sum}} </span></p>
                        </div>
                    </div>
                    <small>Rezerva centra u All Star timu NBA lige 2020 godine.</small>
                </a>

            </div>
        </div>

    </div>

@endsection

