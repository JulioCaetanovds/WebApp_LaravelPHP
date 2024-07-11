@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agendamentos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('agendamentos.create') }}"> Novo Agendamento</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Preço</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Funcionário</th>
            <th>Tipo de Serviço</th>
            <th>Cliente</th>
            <th>Veículo</th>
            <th width="280px">Ação</th>
        </tr>
        @foreach ($agendamentos as $agendamento)
        <tr>
            <td>{{ $agendamento->agendamento_id }}</td>
            <td>{{ $agendamento->preco }}</td>
            <td>{{ $agendamento->data_agendamento }}</td>
            <td>{{ $agendamento->hora_agendamento }}</td>
            <td>{{ $agendamento->funcionario ? $agendamento->funcionario->nome : 'Funcionário não encontrado' }}</td>
            <td>{{ $agendamento->descricao }}</td>
            <td>{{ $agendamento->cliente ? $agendamento->cliente->nome : 'Cliente não encontrado' }}</td>
            <td>{{ $agendamento->veiculo ? $agendamento->veiculo->modelo : 'Veículo não encontrado' }}</td>
            <td>
                <form action="{{ route('agendamentos.destroy', $agendamento->agendamento_id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('agendamentos.show', $agendamento->agendamento_id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('agendamentos.edit', $agendamento->agendamento_id) }}">Editar</a>
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
