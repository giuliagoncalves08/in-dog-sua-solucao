<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CadastroPet;

class CadastrospetsController extends Controller
{
    public function create() {
        return view('CadastroPet.formulario');
    }

    public function index() {
        $dados = CadastroPet::get();
        return view('CadastroPet.index')->with('dados', $dados);
    }
    

    public function store(Request $req) {
        $nomePet = $req->nomePet;
        $idade = intval($req->idade);
        $raca = $req->raca;
        $temperamento = $req->temperamento;
        $porte = $req->porte;
        $sexo = $req->sexo;
        $condicaoEspecial = $req->condicaoEspecial;

        $cadastroPet = new CadastroPet();
        $cadastroPet->nomePet = $nomePet;
        $cadastroPet->idade = $idade;
        $cadastroPet->raca = $raca;
        $cadastroPet->temperamento = $temperamento;
        $cadastroPet->porte = $porte;
        $cadastroPet->sexo = $sexo;
        $cadastroPet->condicaoEspecial = $condicaoEspecial;
        $cadastroPet->save();

        return redirect('/agendamentos');

    }

    public function delete(Request $req){
        $id = $req->id;
        $pet = CadastroPet::find($id);
        $pet-> delete();

        return redirect("/indexPet");
    }

    public function edit($id) {
        $reg = CadastroPet::find($id);
        return view('CadastroPet.formularioedit')->with('reg', $reg);
    }

    public function update(Request $req) {
        $cadastroPet = CadastroPet::find($req->id);
        $cadastroPet->nomePet = $req->nomePet;
        $cadastroPet->idade = $req->idade;
        $cadastroPet->raca = $req->raca;
        $cadastroPet->temperamento = $req->temperamento;
        $cadastroPet->porte = $req->porte;
        $cadastroPet->sexo = $req->sexo;
        $cadastroPet->condicaoEspecial = $req->condicaoEspecial;
        $cadastroPet->save();
        
        return redirect('/indexPet');
    }
}
