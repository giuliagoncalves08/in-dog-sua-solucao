@extends('layout.app')

@section('conteudo')
<body id="mapa-body">
    <div class="menu-btn" onclick="openSidebar()">☰</div>

    <div class="sidebar" id="sidebar">
        <a href="javascript:void(0)" class="close-btn" onclick="closeSidebar()">&times;</a>
        <a href="/{id}/editCliente">Editar Cadastro</a>
        <a href="/{id}/editPet">Editar Pet</a>
        <a href="/createPet">Adicionar novo Pet +</a>
        <a href="/logout">Logout</a>
    </div>

    <div id="map-mapa"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <script>
        function openSidebar() {
            document.getElementById("sidebar").style.width = "250px";
            document.getElementById("map-mapa").style.marginLeft = "250px";  // Ajusta o mapa quando o menu é aberto
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("map-mapa").style.marginLeft = "0";  // Ajusta o mapa quando o menu é fechado
        }

        document.addEventListener("DOMContentLoaded", function () {
            const map = L.map("map-mapa").setView([-19.8157, -43.9542], 13);

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                maxZoom: 19,
                attribution: "© OpenStreetMap contributors"
            }).addTo(map);

            L.marker([-19.8157, -43.9542]).addTo(map)
                .bindPopup("Ponto inicial do passeio")
                .openPopup();
        });
    </script>
</body>
@endsection
