@extends('master')

@section('pestaña')
  <style>
    :root {
      --primary-color: #2E7D32;
      --secondary-color: #4CAF50;
      --accent-color: #03A9F4;
      --cta-color: #FF9800;
      --highlight: #FFD54F;
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
  </style>
@endsection

@section('contenido')
  <div class="container mt-4">
    <h2 class="text-center">Ubicación</h2>
    <p class="text-center">El Zoológico de Culiacán se encuentra dentro del Parque Constitución, en el corazón de la
      ciudad.</p>
    <div class="text-center">
      Mapa Zoológico de Culiacán
    </div>
    <div class="ratio ratio-4x3">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.433935086029!2d-107.38686442389181!3d24.814829747080584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd75751ebe859%3A0xa58aca1973ed9894!2sZool%C3%B3gico%20de%20Culiac%C3%A1n!5e0!3m2!1sen!2smx!4v1758151190404!5m2!1sen!2smx"
        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="mt-5">
      <h3 class="text-center mb-4">¿Qué te pareció tu visita al zoológico?</h3>
      
      <form action="{{ url('/guardarInformacion') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label class="form-label">¿Te gustó el zoológico?</label>
          <select class="form-select" name="opinion" required>
            <option value="">Elige una opción</option>
            <option value="1">Me gustó mucho</option>
            <option value="2">Normal</option>
            <option value="3">No me gustó</option>
          </select>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
      </form>
    </div>
  </div>
@endsection
