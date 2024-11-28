
@extends('layout.app')

@section('conteudo')
<header>
        <div class="logo">
            <img src="images/Logo.png" alt="Indog logo">
        </div>
        <nav>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/createSuporte">SUPORTE</a></li>
                <li><a href="/work-with-us">WORK</a></li>
                <li><a href="/login">LOGIN</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <img src="images/dog.empe.png" alt="" id="dog">

        <div class="form-container">
            <h2>CADASTRO DE PET</h2>
            <form action="/storePet" method="post">

                @csrf
                <label for="nome">Nome do Filhote:</label>
                <input type="text" id="nome" name="nomePet" required>
    
                <label for="idade">Idade:</label>
                <input type="text" id="idade" name="idade" required>
    
                <label for="raca">Raça</label>
                <input type="text" id="raca" name="raca" required>

                <label for="temperamento">Temperamento:</label>
                <select id="temperamento" name="temperamento" required>
                    <option value="nada">...</option>
                    <option value="calmo">Calmo</option>
                    <option value="inquieto">Inquieto</option>
                    <option value="estressado">Estressado</option>
                    <option value="agressivo">Agressivo</option>
                </select>
    
    
                <label for="porte">Porte:</label>
                <select id="porte" name="porte" required>
                    <option value="nada">...</option>
                    <option value="pequeno">Pequeno</option>
                    <option value="médio">Médio</option>
                    <option value="grande">Grande</option>
                </select>

                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="nada">...</option>
                    <option value="feminino">Fêmea</option>
                    <option value="masculino">Macho</option>
                    
                </select>

                <label for="condicaoEspecial">Condição Especial:</label>
                <input type="text" id="condicaoEspecial" name="condicaoEspecial" placeholder="Caso não tenha digite: não tem" required>
    
                <button type="submit">AVANÇAR</button>
            </form>
        </div>
    
    </main>

    

    <footer>
        
    </footer>

@endsection
