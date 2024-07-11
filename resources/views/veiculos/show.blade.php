@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalhes do Veículo</div>

                <div class="card-body">
                    <div class="form-group">
                        <strong>Placa:</strong>
                        {{ $veiculo->placa }}
                    </div>
                    <div class="form-group">
                        <strong>Cor:</strong>
                        {{ $veiculo->cor }}
                    </div>
                    <div class="form-group">
                        <strong>Modelo:</strong>
                        {{ $veiculo->modelo }}
                    </div>

                    <a class="btn btn-primary" href="{{ route('veiculos.index') }}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
