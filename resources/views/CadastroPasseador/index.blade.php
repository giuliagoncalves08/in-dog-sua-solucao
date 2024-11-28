@extends('layout.app')

@section('conteudo')
<div class="container">
        <h2>Cadastro de DOG WALKER</h2>
        <a href="/createPasseador" class="btn-create">Criar Novo</a>
        <div>
            <table class="cadastro-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Senha</th>
                        <th>Genero</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dados as $dado)
                    <tr id="indexTr">
                        <td>{{ $dado->nome }}</td>
                        <td>{{ $dado->cpf }}</td>
                        <td>{{ $dado->email }}</td>
                        <td>{{ $dado->telefone }}</td>
                        <td>{{ $dado->password }}</td>
                        <td>{{ $dado->sexo }}</td>
                        <td>
                            <a href="/{{ $dado->id }}/editPasseador" class="btn-edit">Editar</a>
                            <form action="/deleteCliente" method="post" id="form-delete-{{ $dado->id }}" class="form-delete">
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