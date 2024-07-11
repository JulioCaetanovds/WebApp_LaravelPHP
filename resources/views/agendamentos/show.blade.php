@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalhes do Agendamento</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>ID:</strong>
                        {{ $agendamento->agendamento_id }}
                    </div>
                    <div class="form-group">
                        <strong>Preço:</strong>
                        {{ $agendamento->preco }}
                    </div>
                    <div class="form-group">
                        <strong>Data do Agendamento:</strong>
                        {{ $agendamento->data_agendamento }}
                    </div>
                    <div class="form-group">
                        <strong>Hora do Agendamento:</strong>
                        {{ $agendamento->hora_agendamento }}
                    </div>
                    <div class="form-group">
                        <strong>Tipo de Serviço:</strong>
                        {{ $agendamento->descricao }}
                    </div>
                    <div class="form-group">
                        <strong>Cliente:</strong>
                        {{ $agendamento->cliente->nome }}
                    </div>
                    <div class="form-group">
                        <strong>Veículo:</strong>
                        {{ $agendamento->veiculo->modelo }}
                    </div>
                    <div class="form-group">
                        <strong>Funcionário:</strong>
                        {{ $agendamento->funcionario->nome }}
                    </div>

                    <a class="btn btn-primary" href="{{ route('agendamentos.index') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
