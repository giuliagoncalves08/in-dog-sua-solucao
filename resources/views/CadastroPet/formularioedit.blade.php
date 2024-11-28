@extends('layout.app')

@section('conteudo')
<body id="editar">
<div id="edit">
<form action="/updatePet" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $reg->id }}">
    @method('PUT')
    <h2>Editar Cadastro</h2>
    <p>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nomePet" value="{{ $reg->nomePet }}">
    </p>
    <p>
        <label for="temperamento">Temperamento</label>
        <input type="text" id="temperamento" name="temperamento" value="{{ $reg->temperamento }}">
    </p>  
    <p>
        <label for="idade">Idade</label>
        <input type="number" id="idade" name="idade" value="{{ $reg->idade }}">
    </p>  
    <p>
        <label for="raca">Raça</label>
        <input type="text" id="raca" name="raca" value="{{ $reg->raca }}">
    </p> 
    <p>
        <label for="porte">Porte</label>
        <select id="porte" name="porte">
            <option value="pequeno" {{ $reg->porte == 'Pequeno' ? 'selected' : '' }}>Pequeno</option> 
            <option value="medio" {{ $reg->porte == 'Médio' ? 'selected' : '' }}>Médio</option>
            <option value="grande" {{ $reg->porte == 'Grande' ? 'selected' : '' }}>Grande</option>   
        </select>
    </p>
    <p>
        <label for="sexo">Sexo</label>
        <select id="sexo" name="sexo">
            <option value="feminino" {{ $reg-> sexo == 'Fêmea' ? 'selected' : '' }}>Fêmea</option> 
            <option value="masculino" {{ $reg-> sexo == 'Macho' ? 'selected' : '' }}>Macho</option>    
        </select>
    </p>
    <p>
        <label for="condicao">Condição Especial</label>
        <input type="text" id="condicaoEspecial" name="condicaoEspecial" value="{{ $reg->condicaoEspecial}}">
    </p> 
    <p>    
        <button type="submit" class="salvar">Salvar</button>
    </p>
</form>
</div>
</body>
@endsection
