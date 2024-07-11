@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Funcionário</h1>
    <form action="{{ route('funcionarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="funcao">Função</label>
            <input type="text" class="form-control" id="funcao" name="funcao" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
