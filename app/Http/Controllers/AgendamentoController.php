<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgendamentoModel;

class AgendamentoController extends Controller
{
    // Exibe o formulário de agendamento
    public function create()
    {
        return view('agendamento.create'); // Exibe a view create.blade.php
    }

    public function store(Request $request)
{
    // Valida os dados recebidos
    $request->validate([
        'cliente_nome' => 'required|string', // Agora valida pelo nome
        'passeador_nome' => 'required|string', // Agora valida pelo nome
        'data' => 'required|date',
        'hora' => 'required',
        'localizacao' => 'required|string',
    ]);

    // Cria o agendamento no banco de dados
    AgendamentoModel::create([
        'cliente_nome' => $request->cliente_nome,
        'passeador_nome' => $request->passeador_nome,
        'data' => $request->data,
        'hora' => $request->hora,
        'localizacao' => $request->localizacao,
    ]);

    // Redireciona para a página de criação com uma mensagem de sucesso
    return redirect()->route('passeio.mapa')->with('success', 'Agendamento realizado com sucesso!');
}

}
