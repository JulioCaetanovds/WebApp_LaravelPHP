<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cidade;
use App\Models\Veiculo;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $clientes = Cliente::where('nome', 'like', '%' . $search . '%')
            ->orWhere('cliente_id', 'like', '%' . $search . '%')
            ->orWhere('endereco', 'like', '%' . $search . '%')
            ->orWhere('telefone', 'like', '%' . $search . '%')
            ->get();

        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        $cidades = Cidade::all();
        $veiculos = Veiculo::all();
        return view('clientes.create', compact('cidades', 'veiculos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'cidade_id' => 'required|exists:cidades,id',
            'veiculos' => 'array',
            'veiculos.*' => 'exists:veiculos,veiculo_id',
        ]);

        $cliente = Cliente::create($request->all());

        // Atualizar os veículos com o ID do cliente
        if ($request->has('veiculos')) {
            Veiculo::whereIn('veiculo_id', $request->veiculos)->update(['cliente_id' => $cliente->cliente_id]);
        }

        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso.');
    }

    public function show(Cliente $cliente)
    {
        $cliente->load(['cidade', 'veiculos']);
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        $cidades = Cidade::all();
        $veiculos = Veiculo::all();
        return view('clientes.edit', compact('cliente', 'cidades', 'veiculos'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nome' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'cidade_id' => 'required|exists:cidades,id',
            'veiculos' => 'array',
            'veiculos.*' => 'exists:veiculos,veiculo_id',
        ]);

        $cliente->update($request->all());

        // Remover a associação de veículos anteriores
        Veiculo::where('cliente_id', $cliente->cliente_id)->update(['cliente_id' => null]);

        // Atualizar os veículos com o ID do cliente
        if ($request->has('veiculos')) {
            Veiculo::whereIn('veiculo_id', $request->veiculos)->update(['cliente_id' => $cliente->cliente_id]);
        }

        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso.');
    }

    public function destroy(Cliente $cliente)
    {
        // Remover a associação de veículos antes de deletar o cliente
        Veiculo::where('cliente_id', $cliente->cliente_id)->update(['cliente_id' => null]);

        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso.');
    }
}
