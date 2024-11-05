<form method="post" action="{{$action}}">
    @csrf
    @isset($nome)
        @method('PUT')

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" @isset($nome)value="{{ $nome }}" @endisset name="nome" id="nome">
    </div>
    <button class="btn btn-primary"><i class="fa-solid fa-plus"></i> Adicionar</button>
</form>
