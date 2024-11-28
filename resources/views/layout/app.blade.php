<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InDog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- CSS do Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- JS do Leaflet -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 5px 5px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.logo img {
    width: 90px; 
}

/* Nav Menu */
nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-left: 20px;
    position: relative;
}


nav ul li a {
    text-decoration: none;
    color: #93163A;
    font-weight: bold;
    font-size: 16px;
    position: relative;
    padding-bottom: 5px; 
    transition: color 0.3s, transform 0.3s, border-bottom 0.3s;
}

nav ul li a:hover {
    color: #F81D6E;
    transform: scale(0.5);
    border-bottom: 2px solid #F81D6E; 
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
  
    padding: 0 5%;
    text-align: center;
}

/* Texto e Imagem - Container */
.texto-imagem-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    max-width: 1200px;
}

/* Texto */
#texto {
    color: #A4003D;
    font-family: "Josefin Sans", sans-serif;
    font-size: 2.5rem;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

#txtSolucao {
    color: #A4003D;
    font-family: "Josefin Sans", sans-serif;
    font-size: 2.5rem;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.textoInicio {
    max-width: 500px;
    padding-right: 20px; 
}

.textoInicio h2 {
    color: #F81D6E;
    font-family: "Josefin Sans", sans-serif;
    font-size: 3rem;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.textoInicio p {
    font-family: "Josefin Sans", sans-serif;
    font-size: 1.2rem;
    line-height: 1.5;
    margin-bottom: 20px;
    color: #93163A;
    transition: color 0.3s ease;
}

.textoInicio p:hover {
    color: #F8005C;
}

.textoInicio h2:hover {
    color: #F8005C; 
}

.textoInicio button {
    color: #fff;
    background-color: #F8005C;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.textoInicio button:hover {
    background-color: #93163A;
    transform: scale(1.05);
}

#dogHome {
    width: 50%;
    max-width: 500px; 
    border-radius: 10px;
    transition: transform 0.5s ease;
}

#dogHome:hover {
    transform: scale(1.05); 
}

/* Responsividade */
@media (max-width: 1024px) {
    main {
        height: auto;
        padding: 20px;
    }

    .texto-imagem-container {
        flex-direction: column;
        text-align: center;
    }

    .textoInicio {
        max-width: 80%;
    }

    #dogHome {
        width: 70%;
    }
}

@media (max-width: 768px) {
    .textoInicio h2 {
        font-size: 2.5rem;
    }

    .textoInicio p {
        font-size: 1.1rem;
    }

    .textoInicio button {
        width: 60%;
    }

    #dogHome {
        width: 60%;
    }
}

@media (max-width: 480px) {
    .textoInicio h2 {
        font-size: 2rem;
    }

    .textoInicio p {
        font-size: 1rem;
    }

    .textoInicio button {
        width: 80%;
        padding: 10px;
        font-size: 14px;
    }

    #dogHome {
        width: 90%;
    }
}

/*WORK*/
.work-with-us {
        text-align: center;
        margin-top: 50px;
        font-family: 'Arial', sans-serif;
        padding: 50px 20px;
        padding: 50px 20px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    .work-with-us h1 {
        font-size: 2.5em;
        color: #93163A;
        font-weight: 600;
        margin-bottom: 20px;
    }
    .work-with-us p {
        font-size: 1.2em;
        color: #C31F53;
        margin-bottom: 30px;
        line-height: 1.6;
    }
    .work-with-us .btn {
        background-color: #C31F53; /* Cor verde mais suave */
        color: white;
        padding: 15px 30px;
        font-size: 1.1em;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
        transition: background-color 0.3s ease;
    }
    .work-with-us .btn:hover {
        background-color: #F1035C ; /* Cor mais escura para o hover */
    }

    /* Adicionando responsividade */
    @media (max-width: 768px) {
        .work-with-us {
            padding: 30px 15px;
        }
        .work-with-us h1 {
            font-size: 2em;
        }
        .work-with-us p {
            font-size: 1.1em;
        }
    }    

/*PARTE MAPA*/ 
#mapa-body{
    margin: 0;
            padding: 0;
            height: 100%;
            font-family: "Josefin Sans", sans-serif;
}


        /* Estilos para o mapa */
        #map-mapa {
            height: 100vh;  /* O mapa ocupa toda a altura da tela */
            width: 100%; /* O mapa ocupa 100% da largura disponível */
            margin-left: 250px; /* Ajusta o mapa para que fique ao lado do menu lateral */
            z-index: 1;
        }
        /* Menu lateral */
        .sidebar {
                    height: 100%;
                    width: 0; /* O menu começa escondido */
                    position: fixed;
                    top: 0;
                    left: 0;
                    background-color: #333;
                    padding-top: 60px;
                    transition: 0.3s;
                    z-index: 0;
                }

                .sidebar a {
                    padding: 10px 15px;
                    text-decoration: none;
                    font-size: 18px;
                    color: #fff;
                    display: block;
                    transition: 0.3s;
                }

                .sidebar a:hover {
                    background-color: #575757;
                }

                /* Estilo para o ícone do menu */
                .menu-btn {
                    position: fixed;
                    bottom: 20px;
                    left: 20px; /* Alinha o botão à esquerda */
                    font-size: 30px;
                    color: #fff;
                    cursor: pointer;
                    background-color: #111;
                    border-radius: 50%;
                    padding: 15px;
                    z-index: 2000;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
                }

                .menu-btn:hover {
                    background-color: #93163A;
                }

/*CSS DA PASTA CADASTRO DE CLIENTE*/

/* Formulário */
body {
    font-family: "Josefin Sans", sans-serif;
    background-color: #FFE9F1;
    margin: 0;
    padding: 0;
}

/* Header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 25px; 
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.logo img {
    width: 90px; 
    margin-left: 2rem;
}

/* Nav Menu */
nav ul {
    display: flex;
    list-style: none;
}

nav ul li {
    margin-right: 20px;
    position: relative;
}

/* Efeito no Link */
nav ul li a {
    text-decoration: none;
    color: #93163A;
    font-weight: bold;
    font-size: 16px;
    position: relative;
    padding-bottom: 5px; 
    transition: color 0.3s, transform 0.3s, border-bottom 0.3s;
}

/* Linha embaixo ao passar o mouse (hover effect) */
nav ul li a:hover {
    color: #F81D6E;
    transform: scale(0.9);
    border-bottom: 2px solid #F81D6E; 
}

footer {
    text-align: center;
    padding: 7px;
    background-color: #7c102e;
    color: #93163A;
    font-size: 12px;
}

/* Imagem do cachorro */
#dog {
    width: 100%;
    max-width: 500px; 
    height: auto;
    margin: 50px auto 20px auto; 
    display: block;
}

/* Formulário */
.form-container {
    background-color: #971646;
    padding: 20px 40px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.295);
    max-width: 550px;
    width: 50%;
    margin: 30px auto;  /* Centralizando o formulário */
    position: relative;
    z-index: 2;
}

/* Título do formulário */
.form-container h2 {
    font-size: 18px;
    padding-top: 16px;
    padding-bottom: 15px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 20px;
}

/* Estilos do formulário */
form {
    display: flex;
    flex-direction: column;
}

label {
    color: #ffffff;
    font-weight: bold;
    margin-bottom: 5px;
    margin-top: 10px;
}

input[type="text"],
input[type="email"],
select {
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
}

input[type="text"]:focus,
input[type="email"]:focus,
select:focus {
    border-color: #7c102e;
    outline: none;
    box-shadow: 0 0 5px rgba(124, 16, 46, 0.5);
}

button {
    background-color: #7c102e;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    width: 100%;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #a81748;
}

#senha {
    padding: 8px;
    border-radius: 5px;
    font-size: 17px;
    border: 1px solid #ccc;
}

#senha::placeholder {
    font-size: 16px;
}

/* Responsividade */

/* Para Telas Menores (Tabela/Tablet) */
@media (max-width: 1024px) {
    .form-container {
        width: 70%;
    }

    #dog {
        width: 80%;
        max-width: 400px;
    }
}

/* Para Telas Menores (Celulares) */
@media (max-width: 768px) {
    .form-container {
        width: 85%;
    }

    #dog {
        width: 85%;
        max-width: 350px;
    }

    button {
        font-size: 14px;
    }
}

/* Para Celulares Pequenos */
@media (max-width: 480px) {
    .form-container {
        width: 95%;
        padding: 15px;
    }

    #dog {
        width: 100%;
        max-width: 300px;
    }

    button {
        font-size: 12px;
        padding: 8px;
    }

    input[type="text"],
    input[type="email"],
    select {
        font-size: 14px;
    }
}


/*Index*/

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

.header {
    display: flex;
    justify-content: flex-end; 
    margin-bottom: 20px; 
}
.btn-create {
    padding: 5px 10px; 
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px; 
    margin-left: 10px; 
}

.btn-create:hover {
    background-color: #0056b3;
}

.cadastro-table {
    width: 100%;
    border-collapse: collapse;
    display: inline-block; 
}

.cadastro-table th, .cadastro-table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

.cadastro-table th {
    background-color: #007bff;
    color: white;
}

.cadastro-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.cadastro-table tr:hover {
    background-color: #f1f1f1;
}

#indexTr{
    color: black;
}

/*Agendamento*/
/* Formulário de Agendamento */
#agendamento-form-container {
    background-color: #971646;
    padding: 20px 40px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.295);
    max-width: 550px;
    width: 100%;
    margin: 20px auto;
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Título do formulário */
#agendamento-form-container h2 {
    font-size: 18px;
    padding-top: 16px;
    padding-bottom: 15px;
    text-align: center;
    color: #ffffff;
    margin-bottom: 20px;
}

/* Campos do formulário */
#agendamento-form-container label {
    color: #ffffff;
    font-weight: bold;
    margin-bottom: 5px;
}

#agendamento-form-container input[type="text"],
#agendamento-form-container input[type="email"],
#agendamento-form-container select {
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    width: 100%;
}

#agendamento-form-container input[type="text"]:focus,
#agendamento-form-container input[type="email"]:focus,
#agendamento-form-container select:focus {
    border-color: #7c102e;
    outline: none;
    box-shadow: 0 0 5px rgba(124, 16, 46, 0.5);
}

#agendamento-form-container button {
    background-color: #7c102e;
    color: #fff;
    padding: 12px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    width: 100%;
    transition: background-color 0.3s ease;
}

#agendamento-form-container button:hover {
    background-color: #a81748;
}

/* Ajustes para o mapa */
#map {
    width: 100%; /* O mapa ocupa 100% da largura do contêiner */
    height: 500px; /* Define a altura */
    margin-top: 20px; /* Espaço acima do mapa */
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    overflow: hidden; /* Garante que o conteúdo fique dentro da div */
    z-index: 0; /* Certifica-se de que o mapa fique atrás de outros elementos */
}


/* Responsividade */
@media (max-width: 768px) {
    #agendamento-form-container {
        width: 90%;
    }

    #map {
        height: 350px; /* Ajuste a altura do mapa em telas menores */
    }

    #agendamento-form-container button {
        font-size: 14px;
    }
}


    
</style>


</head>
<body>
    
    <section class='section'>
        @yield('conteudo')
    </section>
            
</body>
</html>