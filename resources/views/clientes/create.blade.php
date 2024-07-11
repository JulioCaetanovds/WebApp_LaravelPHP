@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Cliente</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('clientes.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" name="endereco" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" name="telefone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cidade_id">Cidade:</label>
                            <select name="cidade_id" class="form-control" required>
                                <option value="">Selecione a cidade</option>
                                @foreach($cidades as $cidade)
                                    <option value="{{ $cidade->id }}">{{ $cidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="veiculos">Veículos:</label>
                            <div id="veiculos-container">
                                <div class="input-group mb-3">
                                    <select name="veiculos[]" class="form-control">
                                        <option value="">Selecione um veículo</option>
                                        @foreach($veiculos as $veiculo)
                                            <option value="{{ $veiculo->veiculo_id }}">{{ $veiculo->placa }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-danger remove-veiculo" type="button">Remover</button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="add-veiculo" class="btn btn-success">Adicionar Veículo</button>
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a class="btn btn-primary" href="{{ route('clientes.index') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const veiculosContainer = document.getElementById('veiculos-container');
    const addVeiculoButton = document.getElementById('add-veiculo');

    addVeiculoButton.addEventListener('click', function () {
        const newVeiculoSelect = document.createElement('div');
        newVeiculoSelect.classList.add('input-group', 'mb-3');
        newVeiculoSelect.innerHTML = `
            <select name="veiculos[]" class="form-control">
                <option value="">Selecione um veículo</option>
                @foreach($veiculos as $veiculo)
                    <option value="{{ $veiculo->veiculo_id }}">{{ $veiculo->placa }}</option>
                @endforeach
            </select>
            <div class="input-group-append">
                <button class="btn btn-danger remove-veiculo" type="button">Remover</button>
            </div>
        `;
        veiculosContainer.appendChild(newVeiculoSelect);
    });

    veiculosContainer.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-veiculo')) {
            e.target.closest('.input-group').remove();
        }
    });
});
</script>
@endsection
