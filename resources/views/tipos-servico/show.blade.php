@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tipo de Serviço: {{ $tipo_servico->descricao }}</h1>
    <p><strong>ID:</strong> {{ $tipo_servico->id }}</p>
    <p><strong>Descrição:</strong> {{ $tipo_servico->descricao }}</p>
    <a href="{{ route('tipos-servico.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
