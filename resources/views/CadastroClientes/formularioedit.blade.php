@extends('layout.app')

@section('conteudo')
<body id="editar">
<div id="edit">
<form action="/updateCliente" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $reg->id }}">
    @method('PUT')
    <h2>Editar Cadastro</h2>
    <p>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="{{ $reg->nome }}">
    </p>
    <p>
        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" value="{{ $reg->cpf }}">
    </p>  
    <p>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="{{ $reg->email }}">
    </p>  
    <p>
        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" value="{{ $reg->telefone }}">
    </p> 
    <p>
        <label for="password">Senha</label>
        <input type="password" id="senha" name="password" value="{{ $reg->password }}">
    </p> 
    <p>
        <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo">
            <option value="feminino" {{ $reg-> sexo == 'feminino' ? 'selected' : '' }}>Feminino</option> 
            <option value="masculino" {{ $reg-> sexo == 'masculino' ? 'selected' : '' }}>Masculino</option>    
        </select>
    </p>
    <p>    
        <button type="submit" class="salvar">Salvar</button>
    </p>
</form>
</div>
</body>
@endsection