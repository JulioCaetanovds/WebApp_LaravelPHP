@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Veículos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('veiculos.create') }}"> Novo Veículo</a>
            </div>
        </div>
    </div>

    <!-- Formulário de pesquisa -->
    <form action="{{ route('veiculos.index') }}" method="GET">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Pesquisar Veículos">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
        </div>
    </form>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Modelo</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($veiculos as $veiculo)
        <tr>
            <td>{{ $veiculo->veiculo_id }}</td>
            <td>{{ $veiculo->placa }}</td>
            <td>{{ $veiculo->cor }}</td>
            <td>{{ $veiculo->modelo }}</td>
            <td>
                <form action="{{ route('veiculos.destroy', $veiculo->veiculo_id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('veiculos.show', $veiculo->veiculo_id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('veiculos.edit', $veiculo->veiculo_id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <a class="btn btn-secondary" href="{{ route('home') }}">Voltar para Home</a>
</div>
@endsection
