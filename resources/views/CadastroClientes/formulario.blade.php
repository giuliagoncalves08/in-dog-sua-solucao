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
            <h2>RESPONSÁVEL PELO FILHOTE - CADASTRO </h2>
            <form action="/storeCliente" method="post">

            @csrf
                
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required>
    
                <label for="cpf">Cpf:</label>
                <input type="text" id="cpf" name="cpf" required  oninput="mascara_cpf()">
    
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required oninput="mascara_tel()">
    
                <label for="password">Senha:</label>
                <input type="password" id="senha" name="password" required>
    
                <label for="sexo">Gênero:</label>
                <select id="sexo" name="sexo" required>
                    <option value="nada">...</option>
                    <option value="masculino">Feminino</option>
                    <option value="feminino">Masculino</option>
                    <option value="outro">Outro</option>
                </select>
    
                <button type="submit">FINALIZAR</button>
                <p>Já tem cadastro?</p><a href="/login">logar</a>
            </form>
        </div>
    
    </main>

    

    <footer>
        
    </footer>
    <script>function mascara_tel()
{
    var tel = document.getElementById("telefone").value;
    console.log(tel)

    tel = tel.slice(0,14)
    console.log(tel)

    document.getElementById("telefone").value = tel;


    var tel_formatado = document.getElementById("telefone").value 
    if (tel_formatado[0] != "(")
    {
        if (tel_formatado[0] != undefined)
        {
            document.getElementById("telefone").value = "(" + tel_formatado[0]
        }
    }

    if (tel_formatado[3] != ")")
    {
        if (tel_formatado[3] != undefined)
        {
            document.getElementById("telefone").value = tel_formatado.slice(0,3) + ")" + tel_formatado[3]
        }
    }

    if (tel_formatado[4] != " ")
    {
        if (tel_formatado[4] != undefined)
        {
            document.getElementById("telefone").value = tel_formatado.slice(0,4) + " " + tel_formatado[4]
        }
    }

    if (tel_formatado[9] != "-")
    {
        if (tel_formatado[9] != undefined)
        {
            document.getElementById("telefone").value = tel_formatado.slice(0,9) + "-" + tel_formatado[9]
        }
    }
}


function mascara_cpf()
{
    var cpf = document.getElementById("cpf").value;
    console.log(cpf)

    cpf = cpf.slice(0,14)
    console.log(cpf)

    document.getElementById("cpf").value = cpf;


    var cpf_formatado = document.getElementById("cpf").value 
    if (cpf_formatado[3] != ".")
    {
        if (cpf_formatado[3] != undefined)
        {
            document.getElementById("cpf").value = cpf_formatado.slice(0,3) + "." + cpf_formatado[3]
        }
    }

    if (cpf_formatado[7] != ".")
    {
        if (cpf_formatado[7] != undefined)
        {
            document.getElementById("cpf").value = cpf_formatado.slice(0,7) + "." + cpf_formatado[7]
        }
    }

    if (cpf_formatado[11] != "-")
    {
        if (cpf_formatado[11] != undefined)
        {
            document.getElementById("cpf").value = cpf_formatado.slice(0,11) + "-" + cpf_formatado[11]
        }
    }
}
</script>
@endsection