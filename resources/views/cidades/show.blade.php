@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cidade: {{ $cidade->nome }}</h1>
    <p><strong>ID:</strong> {{ $cidade->id }}</p>
    <p><strong>Nome:</strong> {{ $cidade->nome }}</p>
    <p><strong>UF:</strong> {{ $cidade->uf }}</p>
    <a href="{{ route('cidades.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
