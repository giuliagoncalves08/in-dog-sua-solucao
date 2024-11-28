@extends('layout.app')

@section('conteudo')
<div class="container">
        <h2>Suporte</h2>
        <div>
            <table class="cadastro-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Mensagem</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dados as $dado)
                    <tr id="indexTr">
                        <td>{{ $dado->nome }}</td>
                        <td>{{ $dado->email }}</td>
                        <td>{{ $dado->telefone }}</td>
                        <td>{{ $dado->mensagem }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection