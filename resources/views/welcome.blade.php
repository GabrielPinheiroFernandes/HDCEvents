@extends('layouts.main') 

@section('title','HDC Events')

@section('content')
    <div class="col-md-12" id="search-container">
        <h1>Busque um Evento</h1>
        <form action="">
            <input type="text" id="search" class="form-control" placeholder="procurar">
        </form>
    </div>    
    <div id="events-container" class="col-md-12">
        <h2>proximos eventos</h2>
        <p class="subtitle">veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" srcset="">
                    <div class="card-body">
                        <p class="card-date">10/02/2003</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">x Participantes</p>
                        <a href="/eventos/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
 