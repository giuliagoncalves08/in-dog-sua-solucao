@extends('layout.app')

@section('conteudo')
<div class="container">
        <h2>Cadastro de Pets</h2>
        <a href="/createPet" class="btn-create">Criar Novo</a>
        <div>
            <table class="cadastro-table">
                <thead>
                    <tr>
                        <th>Nome Pet</th>
                        <th>Idade</th>
                        <th>Raça</th>
                        <th>Temperamento</th>
                        <th>Porte</th>
                        <th>Sexo</th>
                        <th>Condição Especial</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dados as $dado)
                    <tr>
                        <td>{{ $dado->nomePet }}</td>
                        <td>{{ $dado->idade }}</td>
                        <td>{{ $dado->raca }}</td>
                        <td>{{ $dado->temperamento }}</td>
                        <td>{{ $dado->porte }}</td>
                        <td>{{ $dado->sexo }}</td>
                        <td>{{ $dado->condicaoEspecial }}</td>
                        <td>
                            <a href="/{{ $dado->id }}/editPet" class="btn-edit">Editar</a>
                            <form action="/deletePet" method="post" id="form-delete-{{ $dado->id }}" class="form-delete">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{ $dado->id }}">
                                <a href="javascript:void(0);" onclick="if (confirm('Deseja realmente excluir?')) { document.getElementById('form-delete-{{ $dado->id }}').submit(); }" class="btn-delete">Deletar</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection