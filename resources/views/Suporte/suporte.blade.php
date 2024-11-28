@extends('layout.suporte')

@section('conteudosuporte')
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

    <!-- Conteúdo Principal -->
    <main id="main-suporte">
        <section class="support-container">
            <h1>Suporte ao Usuário</h1>
            <p>Se você tiver algum problema ou dúvida, preencha o formulário abaixo e nossa equipe entrará em contato o mais breve possível.</p>

            @if(session('success'))
                    <div class="alert alert-success fade-out" style="margin-top: 20px; padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px;">
                        {{ session('success') }}
                    </div>
             @endif

            <div class="form-container">
                <h2>Enviar Solicitação</h2>
              

                <form action="/storeSuporte" method="post">
                    @csrf
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" required>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

                    <button type="submit">Enviar Solicitação</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Indog. Todos os direitos reservados.</p>
    </footer>

</body>
</html>


@endsection
