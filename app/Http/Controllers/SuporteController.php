<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuporteModel;

class SuporteController extends Controller
{
    public function create() {
        return view('Suporte.suporte');
    }

    public function index() {
        $dados = SuporteModel::get();
        return view('Suporte.index')->with('dados', $dados);
    }

    public function store(Request $req) {
        $suporte = new SuporteModel();
        $suporte->nome = $req->nome;
        $suporte->telefone = $req->telefone;
        $suporte->email = $req->email;
        $suporte->mensagem = $req->mensagem;
        $suporte->save();

        return redirect('/createSuporte')->with('success', 'Sua mensagem foi enviada com sucesso! Aguarde o retorno');
    }
}
