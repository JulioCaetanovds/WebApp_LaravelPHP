<?php

namespace App\Http\Controllers;

use App\Models\TipoServico;
use Illuminate\Http\Request;

class TipoServicoController extends Controller
{
    public function index()
    {
        $tipos_servico = TipoServico::all();
        return view('tipos-servico.index', compact('tipos_servico'));
    }

    public function create()
    {
        return view('tipos-servico.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string',
        ]);

        TipoServico::create($request->all());
        return redirect()->route('tipos-servico.index')->with('success', 'Tipo de serviço criado com sucesso.');
    }

    public function show(TipoServico $tipo_servico)
    {
        return view('tipos-servico.show', compact('tipo_servico'));
    }

    public function edit($id)
    {
        $tipo_servico = TipoServico::findOrFail($id);
        return view('tipos-servico.edit', compact('tipo_servico'));
    }

    public function update(Request $request, TipoServico $tipo_servico)
    {
        $request->validate([
            'descricao' => 'required|string',
        ]);

        $tipo_servico->update($request->all());
        return redirect()->route('tipos-servico.index')->with('success', 'Tipo de serviço atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $tipo_servico = TipoServico::findOrFail($id);
        $tipo_servico->delete();
        return redirect()->route('tipos-servico.index')->with('success', 'Tipo de serviço deletado com sucesso.');
    }
}
