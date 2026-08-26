@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #D2B48C;
            --accent-color: #A52A2A;
            --light-color: #F5F5DC;
            --dark-color: #3E2723;
        }
        
        body {
            font-family: 'Georgia', serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .hero-section-location {
            background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(139, 69, 19, 0.8)), 
                        url('https://biblioteca.ulpgc.es/sites/default/files/styles/598x340/public/2023-05/sala-lectura-biblioteca-ulpgc-alicia-giron-web.jpg?itok=dquWzWaD');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 0 0 20px 20px;
        }
        
.logo-container-location {
    width:160px;
    height:160px;
    margin:0 auto 50px;
    border-radius:50%;
    overflow:hidden;
    border:4px solid #D2B48C;
    box-shadow:0 8px 30px rgba(0,0,0,.25);
    background:white;
    display:flex;
    justify-content:center;
    align-items:center;
}

.logo-container-location img{
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 12px;
    display: block;
}
        
        .section-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 30px;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 80px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-custom:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0 5px;
        }
        
        .btn-outline-custom:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .location-card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            margin: 30px 0;
            border-left: 5px solid var(--primary-color);
        }
        
        .location-icon {
            font-size: 4rem;
            color: var(--primary-color);
            margin-bottom: 20px;
        }
        
        .info-section {
            background-color: var(--secondary-color);
            padding: 40px;
            border-radius: 15px;
            margin: 40px 0;
        }
        
        .contact-info {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin: 30px 0;
        }
        
.feature-list {
    list-style: none;
    padding: 0;
    margin-top: 15px;
    display: inline-block;
    text-align: left;
}

.feature-list li {
    padding: 8px 0;
    font-size: 16px;
}

.feature-list li:before {
    content: "✓ ";
    color: var(--primary-color);
    font-weight: bold;
}
    </style>
</head>
<body>
    <section class="hero-section-location animate-fade-in">
        <div class="container">
            <div class="logo-container-location">
                <img src="{{ asset('img/yolo.png') }}" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">Nuestras Ubicaciones</h1>
            <p class="lead fs-4">Encuentra nuestro espacio de lectura</p>
        </div>
    </section>

    <div class="container">
        <section class="text-center my-4">
            <div class="btn-group-lg" role="group">
                <a href="{{route('donaciones')}}" class="btn btn-outline-custom btn-lg me-2">Donaciones</a>
                <a href="{{route('prestamo')}}" class="btn btn-outline-custom btn-lg me-2">Préstamo de Libros</a>
                <a href="{{route('ubicaciones')}}" class="btn btn-custom btn-lg">Ubicaciones</a>
            </div>
        </section>

        <section class="my-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="location-card animate-fade-in">
                        <div class="location-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <h2 class="section-title text-center">Ubicación Principal</h2>
                        <h3 class="text-primary mb-4">Secundaria Técnica Agropecuaria #54</h3>
                        
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>
                                    <h5>Dirección</h5>
                                    <p class="text-muted">Zongolica, Veracruz</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-info">
                                    <i class="fas fa-clock fa-2x text-primary mb-3"></i>
                                    <h5>Horario de Atención</h5>
                                    <p class="text-muted">Lunes a Viernes: 3:00 PM - 6:00 PM</p>
                                    <p class="text-muted">Sábados: 10:00 AM - 2:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="info-section">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <h3 class="text-center mb-4">¿Cómo llegar?</h3>
                        <ul class="feature-list">
                            <li>Ubicada en el corazón de Zongolica</li>
                            <li>Acceso principal por la calle central</li>
                            <li>Transporte público disponible</li>
                            <li>Área segura y accesible</li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-center">
                        <h3 class="text-center mb-4">Servicios Disponibles</h3>
                        <ul class="feature-list">
                            <li>Sala de lectura climatizada</li>
                            <li>Espacio para talleres literarios</li>
                            <li>Área infantil con libros especializados</li>
                            <li>Préstamo de libros a domicilio</li>
                            <li>Actividades culturales regulares</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Encuéntranos en el Mapa</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="map-container">
                        <div style="background-color: #e9ecef; height: 400px; display: flex; align-items: center; justify-content: center; border-radius: 15px;">
                            <div class="text-center">
                                <i class="fas fa-map fa-4x text-primary mb-3"></i>
                                <h4>Mapa de Ubicación</h4>
                                <p class="text-muted">Secundaria Técnica Agropecuaria #54</p>
                                <p class="text-muted">Zongolica, Veracruz</p>
                                <button class="btn btn-custom mt-3">
                                    <i class="fas fa-directions me-2"><a href="https://maps.app.goo.gl/Mb861ir2Gidqjypt6" target="_blank"> </i>Ver en Google Maps</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="location-card">
                        <h2 class="section-title text-center">Información de Contacto</h2>
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                <i class="fas fa-phone fa-2x text-primary mb-3"></i>
                                <h5>Teléfono</h5>
                                <p class="text-muted">Disponible para consultas</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <i class="fas fa-envelope fa-2x text-primary mb-3"></i>
                                <h5>Correo Electrónico</h5>
                                <p class="text-muted">ceyolokalli@example.com</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <i class="fas fa-clock fa-2x text-primary mb-3"></i>
                                <h5>Horario Especial</h5>
                                <p class="text-muted">Visitas guiadas con cita previa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center my-5 py-5">
            <h2 class="mb-4">¿Listo para visitarnos?</h2>
            <p class="fs-5 mb-4">Te esperamos en nuestro espacio de lectura para compartir el maravilloso mundo de los libros</p>
            <div class="btn-group-lg">
                <a href="{{ route('prestamo') }}" class="btn btn-custom btn-lg me-3">Solicitar Préstamo</a>
                <a href="{{ route('donaciones') }}" class="btn btn-outline-custom btn-lg">Hacer Donación</a>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
@endsection