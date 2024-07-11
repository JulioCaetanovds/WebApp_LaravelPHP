@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Página Home</div>

                <div class="card-body">
                    <p>Bem-vindo à aplicação de gerenciamento de lavagem de veículos. Aqui você pode gerenciar clientes, veículos e agendamentos.</p>

                    <h5>Funcionalidades:</h5>
                    <ul>
                        <li><a href="{{ route('clientes.index') }}">Gerenciar Clientes</a></li>
                        <li><a href="{{ route('veiculos.index') }}">Gerenciar Veículos</a></li>
                        <li><a href="{{ route('agendamentos.index') }}">Gerenciar Agendamentos</a></li>
                        <li><a href="{{ route('cidades.index') }}">Gerenciar Cidades</a></li>
                        <li><a href="{{ route('funcionarios.index') }}">Gerenciar Funcionários</a></li>
                        <li><a href="{{ route('tipos-servico.index') }}">Gerenciar Tipos de Serviços</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
