<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Cliente;
use App\Models\TipoServico;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::with(['cliente', 'veiculo', 'tipoServico'])->get();
        return view('agendamentos.index', compact('agendamentos'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $tiposServico = TipoServico::all();
        return view('agendamentos.create', compact('clientes', 'tiposServico'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,cliente_id',
            'veiculo_id' => 'required|exists:veiculos,veiculo_id',
            'data' => 'required|date',
            'hora' => 'required',
            'tipo_servico_id' => 'required|exists:tipo_servicos,id',
        ]);

        Agendamento::create($request->all());

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento criado com sucesso.');
    }

    public function show(Agendamento $agendamento)
    {
        return view('agendamentos.show', compact('agendamento'));
    }

    public function edit(Agendamento $agendamento)
    {
        $clientes = Cliente::all();
        $tiposServico = TipoServico::all();
        return view('agendamentos.edit', compact('agendamento', 'clientes', 'tiposServico'));
    }

    public function update(Request $request, Agendamento $agendamento)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,cliente_id',
            'veiculo_id' => 'required|exists:veiculos,veiculo_id',
            'data' => 'required|date',
            'hora' => 'required',
            'tipo_servico_id' => 'required|exists:tipo_servicos,id',
        ]);

        $agendamento->update($request->all());

        return redirect()->route('agendamentos.index')->with('success', 'Agendamento atualizado com sucesso.');
    }

    public function destroy(Agendamento $agendamento)
    {
        $agendamento->delete();
        return redirect()->route('agendamentos.index')->with('success', 'Agendamento excluído com sucesso.');
    }

    public function getVeiculosByCliente($cliente_id)
    {
        $veiculos = Veiculo::where('cliente_id', $cliente_id)->get();
        return response()->json($veiculos);
    }
}
