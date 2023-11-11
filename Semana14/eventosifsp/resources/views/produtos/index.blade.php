@extends('layout') {{-- Estendendo o layout base --}}

@section('content')
    <h1>Lista de Produtos</h1>
    <ul>
        @foreach($produtos as $produto)
            <li>{{ $produto }}</li>
        @endforeach
    </ul>
@endsection

