@extends('master')

@section('pestaña')
    <style>
        :root {
            --primary-color: #2E7D32;
            --secondary-color: #FF9800;
            --accent-color: #03A9F4;
            --light-color: #E8F5E9;
            --dark-color: #1B5E20;
            --paper: #F5F1E6;
            --highlight: #e0c361;
        }

        body {
            background-color: var(--paper);
            color: var(--text-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: var(--primary-color) !important;
        }

        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            color: var(--light-color) !important;
            color: var(--highlight) !important;
        }

        h1,
        h2,
        h3 {
            color: var(--dark-color);
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-title {
            color: var(--primary-color);
            font-weight: 600;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--dark-color);
            border-color: var(--dark-color);
        }

        .bg-custom {
            background-color: var(--light-color);
        }

        footer {
            background-color: var(--dark-color);
            color: white;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 15px;
        }
    </style>
@endsection

@section('contenido')
    <main class="container my-5">
        <h1 class="text-center mb-5">Características del Zoológico de Culiacán</h1>

        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('img/especies.jpg') }}" class="card-img-top" alt="Diversidad de especies">
                    <div class="card-body">
                        <h5 class="card-title">Diversidad de Especies</h5>
                        <p class="card-text">El Zoológico de Culiacán alberga más de 500 animales de 150 especies
                            diferentes, incluyendo mamíferos, aves, reptiles y especies endémicas de la región.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('img/programas_conservacion.jpg') }}" class="card-img-top" alt="Programas de conservación">
                    <div class="card-body">
                        <h5 class="card-title">Programas de Conservación</h5>
                        <p class="card-text">Participa activamente en programas de conservación de especies en peligro
                            de extinción y reproducción en cautiverio de fauna regional y nacional.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('img/educacion_ambiental.jpg') }}" class="card-img-top" alt="Educación ambiental">
                    <div class="card-body">
                        <h5 class="card-title">Educación Ambiental</h5>
                        <p class="card-text">Ofrece programas educativos para todas las edades, con talleres, visitas
                            guiadas y actividades interactivas para promover el cuidado del medio ambiente.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ asset('img/instalaciones.jpg') }}" class="card-img-top" alt="Instalaciones modernas">
                    <div class="card-body">
                        <h5 class="card-title">Instalaciones Modernas</h5>
                        <p class="card-text">Cuenta con hábitats amplios y naturalizados, áreas de esparcimiento,
                            restaurante, y espacios diseñados para el bienestar animal y la comodidad de los visitantes.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
                <div class="bg-custom p-4 rounded">
                    <h2 class="text-center mb-4">Nuestras Instalaciones</h2>
                    <p>El Zoológico de Culiacán cuenta con 12 hectáreas de extensión, donde hemos creado ambientes que
                        simulan los hábitats naturales de cada especie. Nuestras instalaciones incluyen:</p>

                    <ul>
                        <li>Aviario con más de 50 especies de aves</li>
                        <li>Herpetario con reptiles y anfibios</li>
                        <li>Zona de felinos con hábitats amplios y seguros</li>
                        <li>Área de primates con espacios de enriquecimiento ambiental</li>
                        <li>Acuario con especies de agua dulce de la región</li>
                        <li>Área infantil con juegos educativos</li>
                        <li>Anfiteatro para presentaciones educativas</li>
                    </ul>

                    <div class="row text-center mt-4">
                        <div class="col-md-4">
                            <h4>Especies</h4>
                            <p>150+ especies</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Área Natural</h4>
                            <p>12 hectáreas</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Visitantes</h4>
                            <p>200,000+ anuales</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@endsection
