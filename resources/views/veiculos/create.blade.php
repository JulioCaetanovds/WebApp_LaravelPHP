@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar Veículo</div>

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

                    <form action="{{ route('veiculos.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="placa">Placa:</label>
                            <input type="text" name="placa" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="cor">Cor:</label>
                            <input type="text" name="cor" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="modelo">Modelo:</label>
                            <input type="text" name="modelo" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <a class="btn btn-primary" href="{{ route('veiculos.index') }}">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
