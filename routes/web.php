<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\TipoServicoController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/agendamentos/veiculos/{clienteId}', [AgendamentoController::class, 'getVeiculosByCliente']);

Route::middleware(['web'])->group(function () {
    Route::resource('clientes', ClienteController::class);
    Route::resource('veiculos', VeiculoController::class);
    Route::resource('agendamentos', AgendamentoController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('cidades', CidadeController::class);
    Route::resource('tipos-servico', TipoServicoController::class);
});

