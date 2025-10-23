@extends('master')

@section('pestaña')
  <style>
    :root {
      --primary-color: #2E7D32;
      --secondary-color: #4CAF50;
      --accent-color: #03A9F4;
      --cta-color: #FF9800;
      --highlight: #e0c361;
      --earth: #6D4C41;
      --paper: #F5F1E6;
      --text-dark: #212529;
      --text-light: #ffffff;
    }

    body {
      background-color: var(--paper);
      color: var(--text-dark);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
      background-color: var(--primary-color) !important;
    }

    .navbar a.navbar-brand {
      color: var(--text-light) !important;
      font-weight: 700;
    }

    .navbar-nav .nav-link {
      color: var(--text-light) !important;
      font-weight: 500;
    }

    .navbar-nav .nav-link:hover {
      color: var(--highlight) !important;
    }

    h1,
    h2,
    h3 {
      color: var(--primary-color);
    }

    .btn-primary {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color);
      color: var(--text-light);
    }

    .btn-primary:hover {
      background-color: #3e8b3e;
      border-color: #3e8b3e;
    }

    .btn-success {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color);
    }

    .btn-cta {
      background-color: var(--cta-color);
      border-color: var(--cta-color);
      color: var(--text-light);
    }

    footer {
      background-color: var(--earth);
      color: var(--text-light);
    }

    .img-container {
      height: 300px;
      overflow: hidden;
      border-radius: 10px;
      margin: 20px 0;
    }

    .img-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .img-fullscreen-wrapper {
      width: 100vw;
      position: relative;
      left: 50%;
      right: 50%;
      margin-left: -50vw;
      margin-right: -50vw;
      overflow: hidden;
    }

    .img-fullscreen {
      width: 100%;
      height: 60vh;
      object-fit: cover;
      display: block;
    }
  </style>
@endsection

@section('contenido')
  <main class="container py-5">
    <h2>Historia del Zoológico de Culiacán</h2>
    <p>El zoológico ha evolucionado a lo largo de los años adaptándose a nuevas prácticas de bienestar animal y
      educación ambiental. Su historia incluye fases de crecimiento, modernización de instalaciones y el impulso de
      programas de conservación local.</p>

    <div class="img-fullscreen-wrapper my-4">
      <img src="{{ asset('img/historia.jpg') }}" alt="Imagen histórica del Zoológico de Culiacán" class="img-fullscreen">
    </div>

    <p>Con el tiempo, el zoológico se convirtió en un referente regional para el cuidado de especies y la divulgación
      científica orientada a jóvenes y visitantes.</p>
  </main>
@endsection
