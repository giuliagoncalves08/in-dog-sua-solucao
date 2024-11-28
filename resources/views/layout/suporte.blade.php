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
    .support-container h1{
        font-size: 2em;
        color: #93163A;
        font-family: "Josefin Sans", sans-serif;
        font-weight: 600;
        text-align:center;
        margin-bottom: 20px;
    }
    .support-container p{
        font-size: 0,5em;
        color: #93163A;
        text-align:center;
        font-family: "Josefin Sans", sans-serif;
        font-weight: 600;
        margin-bottom: 20px;
    }

.fade-out {
    animation: fadeOut 3.5s forwards; 
    text-align:center;
}

@keyframes fadeOut {
    0% {
        opacity: 1; 
    }
    80% {
        opacity: 1; 
    }
    100% {
        opacity: 0; 
        display: none; 
    }
}
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
    width: 100%;
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

</style>

</head>
<body>
    
    <section class='section'>
        @yield('conteudosuporte')
    </section>
            
</body>
</html>