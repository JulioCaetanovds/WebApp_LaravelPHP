@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Clientes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clientes.create') }}"> Novo Cliente</a>
            </div>
        </div>
    </div>

    <!-- Formulário de pesquisa -->
    <form action="{{ route('clientes.index') }}" method="GET">
        <div class="row">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control" placeholder="Pesquisar Clientes">
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
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Cidade</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->cliente_id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->endereco }}</td>
            <td>{{ $cliente->telefone }}</td>
            <td>{{ $cliente->cidade ? $cliente->cidade->nome : 'N/A' }}</td>
            <td>
                <form action="{{ route('clientes.destroy', $cliente->cliente_id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('clientes.show', $cliente->cliente_id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('clientes.edit', $cliente->cliente_id) }}">Editar</a>
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
