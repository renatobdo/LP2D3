@extends('layouts.main')

@section('title', 'Página de Eventos')

@section('content')

<div id="search-container" class="col-md-12">
<h1>Busque um evento</h1>
    <form action"">
        <input type="text" id="search" name="search" class="form-control" placeholder="procurar um evento">

    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div class="cards-container row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/eventosIF1.png" alt="{{$event->titulo}}">
            <div class="card-body">
                <p class="card-date">03/11/2023</p>
                <h5 div class="card-title">
                    {{$event->titulo}}
                </h5>
                <p class="card-participants">x participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
            

            
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection