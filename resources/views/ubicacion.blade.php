@extends('master')

@section('contenido')
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1>Ubicación</h1>
            <p class="lead">¿Cómo llegar al Zoológico de Culiacán?</p>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>Dirección</h2>
                    <p>Blvrd. Pablo Sánchez Parra S/N, Recursos Hidráulicos, 80108 Culiacán Rosales, Sin.</p>
                    
                    <h3>Horarios</h3>
                    <ul class="list-unstyled">
                        <li><strong>Martes a Domingo:</strong> 10:00 AM - 5:00 PM</li>
                        <li><strong>Lunes:</strong> Cerrado</li>
                    </ul>

                    <h3>Contacto</h3>
                    <ul class="list-unstyled">
                        <li><strong>Teléfono:</strong> (667) 712-1345</li>
                        <li><strong>Email:</strong> contacto@zoologicoculiacan.com</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2>¿Cómo llegar?</h2>
                    <p>El Zoológico de Culiacán se encuentra ubicado en una zona de fácil acceso:</p>
                    <ul>
                        <li>A 10 minutos del centro de la ciudad</li>
                        <li>Cerca del Boulevard Pablo Sánchez</li>
                        <li>Accesible por transporte público</li>
                    </ul>
                    <p>Contamos con estacionamiento gratuito para nuestros visitantes.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2>Mapa</h2>
                    <!-- Aquí iría el mapa de Google Maps -->
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.7257434188153!2d-107.39399792392572!3d24.79931644893837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd0a10e13cd0b%3A0x908d5626ce4e72b3!2sZool%C3%B3gico%20de%20Culiac%C3%A1n!5e0!3m2!1ses-419!2smx!4v1697948439609!5m2!1ses-419!2smx" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Transporte Público</h3>
                    <p>Varias rutas de autobús tienen parada cerca del zoológico:</p>
                    <ul>
                        <li>Ruta 1: Centro - Zoológico</li>
                        <li>Ruta 5: Plaza Forum - Zoológico</li>
                        <li>Ruta 10: Terminal - Zoológico</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Estacionamiento</h3>
                    <p>Contamos con:</p>
                    <ul>
                        <li>Amplio estacionamiento gratuito</li>
                        <li>Espacios para personas con discapacidad</li>
                        <li>Área para autobuses escolares</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3>Servicios Cercanos</h3>
                    <ul>
                        <li>Parada de taxi a 100m</li>
                        <li>Restaurantes a 500m</li>
                        <li>Farmacia a 300m</li>
                        <li>Tienda de conveniencia a 200m</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
