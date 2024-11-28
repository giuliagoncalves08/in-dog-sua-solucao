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
            <h2>LOGIN</h2>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
            <form action="/authenticate" method="post">
                @csrf
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"  placeholder="Digite seu e-mail" required>
    
                <label for="password">Senha:</label>
                <input type="password" id="senha" name="password" value="" placeholder="Digite sua senha">
    
    
                <p>Não possui uma conta? 
                <a id="cadastrar" href="/createCliente">Cadastrar</a>
                </p>
    
                <button type="submit">ENTRAR</button>

                <div id="rodape">
                    © Indog Company - 2024 
                </div>
            </form>
        </div>
    
</main>

    

@endsection