@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cidade</h1>
    <form action="{{ route('cidades.update', $cidade->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $cidade->nome }}" required>
        </div>
        <div class="form-group">
            <label for="uf">UF</label>
            <input type="text" class="form-control" id="uf" name="uf" value="{{ $cidade->uf }}" required maxlength="2">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
