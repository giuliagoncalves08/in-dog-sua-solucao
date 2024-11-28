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
<div class="work-with-us">
    <h1>Junte-se à nossa equipe!</h1>
    <p>Estamos sempre à procura de pessoas incríveis para se juntar ao nosso time. Se você ama animais e quer fazer parte de um projeto apaixonante, nós queremos você!</p>

    <p>Se você está interessado em trabalhar conosco, cadastre-se abaixo e venha fazer a diferença:</p>

    <a href="/createPasseador" class="btn btn-primary">Cadastre-se Agora</a> 

    
</div>
@endsection

