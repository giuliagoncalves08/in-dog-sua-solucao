<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroCliente;
use Illuminate\Support\Facades\Hash; // Importa o Hash

class CadastroclientesController extends Controller
{
    // Retorna o formulário de cadastro
    public function create() {
        return view('CadastroClientes.formulario');
    }

    // Lista todos os clientes cadastrados
    public function index() {
        $dados = CadastroCliente::get();
        return view('CadastroClientes.index')->with('dados', $dados);
    }

    // Salva um novo cliente no banco de dados
    public function store(Request $req) {
        $cadastroCliente = new CadastroCliente();
        $cadastroCliente->nome = $req->nome; 
        $cadastroCliente->cpf = $req->cpf; 
        $cadastroCliente->email = $req->email; 
        $cadastroCliente->telefone = $req->telefone; 
        $cadastroCliente->password = Hash::make($req->password); // Criptografa a senha com Hash
        $cadastroCliente->sexo = $req->sexo;  
        $cadastroCliente->save();   

        return redirect('/indexCliente');
    }

    // Remove um cliente com base no ID
    public function delete(Request $req) {
        $id = $req->id;
        $cliente = CadastroCliente::find($id);

        if ($cliente) {
            $cliente->delete();
        }

        return redirect("/indexCliente");
    }

    // Retorna o formulário para editar o cliente
    public function edit($id) {
        $reg = CadastroCliente::find($id);
        return view('CadastroClientes.formularioedit')->with('reg', $reg);
    }

    // Atualiza os dados do cliente
    public function update(Request $req) {
        $cadastroCliente = CadastroCliente::find($req->id);

        if ($cadastroCliente) {
            $cadastroCliente->nome = $req->nome;
            $cadastroCliente->cpf = $req->cpf;
            $cadastroCliente->email = $req->email;
            $cadastroCliente->telefone = $req->telefone;

            // Verifica se a senha foi alterada e criptografa novamente
            if ($req->password && !Hash::check($req->password, $cadastroCliente->password)) {
                $cadastroCliente->password = Hash::make($req->password);
            }

            $cadastroCliente->sexo = $req->sexo;
            $cadastroCliente->save();
        }
        
        return redirect('/indexCliente');
    }
}
