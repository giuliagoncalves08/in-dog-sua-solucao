<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroPasseador;
use Illuminate\Support\Facades\Hash; // Importa o Hash

class CadastropasseadoresController extends Controller
{
     // Retorna o formulário de cadastro
     public function create() {
        return view('CadastroPasseador.formulario');
    }

    // Lista todos os clientes cadastrados
    public function index() {
        $dados = CadastroPasseador::get();
        return view('CadastroPasseador.index')->with('dados', $dados);
    }

    // Salva um novo cliente no banco de dados
    public function store(Request $req) {
        $cadastroPasseador = new CadastroPasseador();
        $cadastroPasseador->nome = $req->nome; 
        $cadastroPasseador->cpf = $req->cpf; 
        $cadastroPasseador->email = $req->email; 
        $cadastroPasseador->telefone = $req->telefone; 
        $cadastroPasseador->password = Hash::make($req->password); // Criptografa a senha com Hash
        $cadastroPasseador->sexo = $req->sexo;  
        $cadastroPasseador->save();   

        return redirect('/indexPasseador');
    }

    // Remove um cliente com base no ID
    public function delete(Request $req) {
        $id = $req->id;
        $passeador = CadastroPasseador::find($id);

        if ($passeador) {
            $passeador->delete();
        }

        return redirect("/indexPasseador");
    }

    // Retorna o formulário para editar o cliente
    public function edit($id) {
        $reg = CadastroPasseador::find($id);
        return view('CadastroPasseador.formularioedit')->with('reg', $reg);
    }

    // Atualiza os dados do cliente
    public function update(Request $req) {
        $cadastroPasseador = CadastroPasseador::find($req->id);

        if ($cadastroPasseador) {
            $cadastroPasseador->nome = $req->nome;
            $cadastroPasseador->cpf = $req->cpf;
            $cadastroPasseador->email = $req->email;
            $cadastroPasseador->telefone = $req->telefone;

            // Verifica se a senha foi alterada e criptografa novamente
            if ($req->password && !Hash::check($req->password, $cadastroPasseador->password)) {
                $cadastroPasseador->password = Hash::make($req->password);
            }

            $cadastroPasseador->sexo = $req->sexo;
            $cadastroPasseador->save();
        }
        
        return redirect('/indexPasseador');
    }
}
