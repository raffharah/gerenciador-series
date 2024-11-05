@extends('layout')

@section('cabecalho')
    Series
@endsection

@section('conteudo')
    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">
        <i class="fa-solid fa-plus"></i> Adicionar
    </a>

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}
                <span class="d-flex">
                    <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm me-2">
                        <i class="fa-solid fa-pen"></i> Editar
                    </a>
                    <form method="post" action="/series/{{ $serie->id }}" onsubmit="return confirm('Certeza? {{ addslashes($serie->nome) }}')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i> Excluir
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
@endsection
