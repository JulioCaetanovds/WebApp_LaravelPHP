@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalhes do Cliente</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $cliente->nome }}
                    </div>
                    <div class="form-group">
                        <strong>Endereço:</strong>
                        {{ $cliente->endereco }}
                    </div>
                    <div class="form-group">
                        <strong>Telefone:</strong>
                        {{ $cliente->telefone }}
                    </div>
                    <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <p>{{ $cliente->cidade ? $cliente->cidade->nome : 'N/A' }}</p>
                    </div>
                    <div class="form-group">
                        <strong>Veículos:</strong>
                        <ul>
                            @foreach($cliente->veiculos as $veiculo)
                                <li>{{ $veiculo->placa }} - {{ $veiculo->modelo }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <a class="btn btn-primary" href="{{ route('clientes.index') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
