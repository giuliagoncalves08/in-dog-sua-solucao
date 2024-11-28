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

<!-- Container do formulário -->
<div id="agendamento-form-container">
    <h2>Agendamento de Passeio</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="agendamentosStore" method="POST">
    @csrf

    <label for="cliente_nome">Nome do Cliente:</label>
    <input type="text" id="cliente_nome" name="cliente_nome" value="{{ old('cliente_nome') }}" required>
    @error('cliente_nome')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="passeador_nome">Nome do Passeador:</label>
    <input type="text" id="passeador_nome" name="passeador_nome" value="{{ old('passeador_nome') }}" required>
    @error('passeador_nome')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="data">Data:</label>
    <input type="date" id="data" name="data" value="{{ old('data') }}" required>
    @error('data')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" value="{{ old('hora') }}" required>
    @error('hora')
        <div class="error">{{ $message }}</div>
    @enderror

    <label for="localizacao">Localização:</label>
    <input type="text" id="localizacao" name="localizacao" value="{{ old('localizacao') }}" readonly required>

        <!-- Mapa -->
        <div id="map"></div>


        <button type="submit">Agendar</button>
    </form>
</div>

<footer>
    <p>&copy; 2024 Indog. Todos os direitos reservados.</p>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Inicializa o mapa no centro de Belo Horizonte
        const map = L.map('map').setView([-19.8157, -43.9542], 13);

        // Adiciona o TileLayer (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors',
        }).addTo(map);

        // Adiciona um marcador inicial
        let marker = L.marker([-19.8157, -43.9542]).addTo(map);

        // Atualiza o marcador ao clicar no mapa
        map.on('click', function (e) {
            const { lat, lng } = e.latlng;
            marker.setLatLng(e.latlng);
            document.getElementById('localizacao').value = `${lat}, ${lng}`;
        });
    });
</script>

@endsection
