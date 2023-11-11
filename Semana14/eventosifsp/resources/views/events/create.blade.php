@extends('layouts.main')

@section('title','Criar eventos')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Tela de Criação de eventos</h1>
    <form id="eventoForm" action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição do evento:</label>
            <textarea id="description" name="description" class="form-control" placeholder="Descrição do evento"></textarea>
        </div>
        <br>

        <input type="submit" class="btn btn-primary" name="criar_evento" value="criar evento">

        <br><br>

    </form>
   </div>



@endsection