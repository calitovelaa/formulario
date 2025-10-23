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

        html,
        body {
            height: 100%;
        }

        body {
            background-color: var(--paper);
            color: var(--text-dark);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1 0 auto;
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

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: transform .3s, box-shadow .3s;
            margin-bottom: 20px;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
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

        .bg-custom {
            background-color: rgba(46, 125, 50, 0.05);
        }

        footer {
            background-color: var(--earth);
            color: var(--text-light);
            flex-shrink: 0;
        }

        .img-container {
            max-height: 60vh;
            overflow: hidden;
            border-radius: 10px;
            margin: 20px 0;
            position: relative;
        }

        .img-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        .img-caption {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.45);
            color: #fff;
            padding: .75rem 1rem;
            text-align: center;
            font-size: 1.05rem;
        }

        a {
            color: var(--accent-color);
        }

        a:hover {
            color: var(--accent-color);
        }
    </style>
@endsection

@section('contenido')
    <main class="container my-5 text-center">
        <div class="row">
            <div class="col-12">
                <div class="img-container mx-auto">
                    <img src="{{ asset('img/zoologico.jpg') }}" alt="Vista principal del Zoológico de Culiacán"
                        title="Vista principal del Zoológico de Culiacán" class="img-fluid">
                    <div class="img-caption">Vista principal del Zoológico de Culiacán</div>
                </div>
            </div>
        </div>
    </main>
@endsection
@endsection
