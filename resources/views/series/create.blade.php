@extends('layout')

@section('cabecalho')
    Adicionar Série
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('series.store') }}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>
        <button class="btn btn-primary">
            <i class="fa-solid fa-plus"></i> Adicionar
        </button>
    </form>
@endsection
