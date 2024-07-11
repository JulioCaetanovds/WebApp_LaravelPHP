@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tipos de Serviço</h1>
    <a href="{{ route('tipos-servico.create') }}" class="btn btn-primary">Adicionar Tipo de Serviço</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipos_servico as $tipo_servico)
            <tr>
                <td>{{ $tipo_servico->id }}</td>
                <td>{{ $tipo_servico->descricao }}</td>
                <td>
                    <a href="{{ route('tipos-servico.show', $tipo_servico->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('tipos-servico.edit', $tipo_servico->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tipos-servico.destroy', $tipo_servico->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
