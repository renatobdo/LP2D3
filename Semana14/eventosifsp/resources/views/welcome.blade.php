@extends('layouts.main')

@section('title', 'IFSP Eventos')

@section('content')

        <h1>Eventos IFSP</h1>
        <img src="img/logo-ifsp-removebg.png" alt="Banner">
            @if (10 > 5)
                <p>A condição é true</p>
            @endif
        {{$nome}}
        @if($nome == 'Renato')
        <!-- o nome da variável é a chave -->
        {{-- comentário no blade --}}
            <p>O nome é Renato e ele tem {{$idade}} anos e ele trabalha como {{$profissao}}</p>
        @else
            <p>O nome não é Renato</p>
            
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
                <p>O i é 2</p>
            @endif
        @endfor

        @php
            $nome = "Testes<br>";
            echo $nome;
        @endphp

        @foreach($nomes as $nome)
            {{ $loop->index }}
            <p>{{$nome}}</p>
        @endforeach

@endsection