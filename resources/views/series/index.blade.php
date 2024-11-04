@extends('layout')

@section('cabecalho')
    Series
@endsection

@section('conteudo')
    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
    @endif
    <a href="{{route('criar_serie')}}" class="btn btn-dark mb-2"><i class="fa-solid fa-plus"></i> Adicionar</a>
    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$serie->nome}}
            <form method="post" action="/series/{{$serie->id}}" onsubmit="return confirm('Certeza? {{addslashes($serie->nome)}}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
            </form>
            </li>
        @endforeach
    </ul>
@endsection
