@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Funcionário</h1>
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $funcionario->nome }}" required>
        </div>
        <div class="form-group">
            <label for="funcao">Função</label>
            <input type="text" class="form-control" id="funcao" name="funcao" value="{{ $funcionario->funcao }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
