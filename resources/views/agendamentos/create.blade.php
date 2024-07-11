@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Novo Agendamento</div>

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

                    <form action="{{ route('agendamentos.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="cliente_id">Cliente:</label>
                            <select name="cliente_id" id="cliente_id" class="form-control" required>
                                <option value="">Selecione um cliente</option>
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->cliente_id }}">{{ $cliente->descricao }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="veiculo_id">Veículo:</label>
                            <select name="veiculo_id" id="veiculo_id" class="form-control" required>
                                <option value="">Selecione um veículo</option>
                                <!-- Os veículos serão carregados via JavaScript -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="data">Data:</label>
                            <input type="date" name="data" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="hora">Hora:</label>
                            <input type="time" name="hora" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="tipo_servico_id">Tipo de Serviço:</label>
                            <select name="tipo_servico_id" class="form-control" required>
                                <option value="">Selecione um tipo de serviço</option>
                                @foreach($tiposServico as $tipoServico)
                                    <option value="{{ $tipoServico->id }}">{{ $tipoServico->descricao }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-secondary" href="{{ route('agendamentos.index') }}">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('cliente_id').addEventListener('change', function () {
    var clienteId = this.value;
    fetch('/agendamentos/veiculos/' + clienteId)
        .then(response => response.json())
        .then(data => {
            var veiculoSelect = document.getElementById('veiculo_id');
            veiculoSelect.innerHTML = '<option value="">Selecione um veículo</option>';
            data.forEach(function (veiculo) {
                veiculoSelect.innerHTML += '<option value="' + veiculo.veiculo_id + '">' + veiculo.placa + '</option>';
            });
        });
});
</script>
@endsection
