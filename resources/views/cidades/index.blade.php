@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cidades</h1>
    <a href="{{ route('cidades.create') }}" class="btn btn-primary">Adicionar Cidade</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>UF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cidades as $cidade)
            <tr>
                <td>{{ $cidade->id }}</td>
                <td>{{ $cidade->nome }}</td>
                <td>{{ $cidade->uf }}</td>
                <td>
                    <a href="{{ route('cidades.show', $cidade->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('cidades.edit', $cidade->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('cidades.destroy', $cidade->id) }}" method="POST" style="display:inline;">
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
