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

    <div class="textoInicio">
        <h1 id="texto"> Seja Bem vindo a In-Dog </h1>
        <p>Você não tem tempo para sair com seu <br> pet por conta da rotina, mas não abre<br> mão do seu filhote?</p>
        <h2 id="txtSolucao">Nós somos a solução !</h2>
        <a href="/login"><button>Venha fazer parte</button></a>
    </div>

    <img src="images/home.png" alt="" id="dogHome">

            
</main>

    


@endsection