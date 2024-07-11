@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Funcionário: {{ $funcionario->nome }}</h1>
    <p><strong>ID:</strong> {{ $funcionario->id }}</p>
    <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
    <p><strong>Função:</strong> {{ $funcionario->funcao }}</p>
    <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
