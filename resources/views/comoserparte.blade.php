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
        
        .hero-section-volunteer {
            background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(139, 69, 19, 0.8)), 
                        url('https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 0 0 20px 20px;
        }
        
        .logo-container-volunteer {
            width:150px;
            height:140px;
            margin:0 auto 30px;
            border-radius:50%;
            overflow:hidden;
            border:6px solid #D2B48C;
            box-shadow:0 8px 30px rgba(0,0,0,.25);
            background:white;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .logo-container-volunteer img{
            width:92%;
            height:92%;
            object-fit:contain;
            object-position:center;
            border-radius:50%;
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
        
        .card-custom {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background-color: white;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .card-header-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-bottom: none;
        }
        
        .volunteer-types {
            background-color: var(--secondary-color);
            padding: 40px;
            border-radius: 10px;
            margin: 40px 0;
        }
        
        .volunteer-card {
            text-align: center;
            padding: 30px 80px;
            background-color: white;
            border-radius: 10px;
            margin: 15px 0;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .volunteer-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
        }
        
        .volunteer-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .participant-list {
            list-style: none;
            padding: 0;
            text-align: center;
        }
        
        .participant-list li {
            padding: 10px 0;
            font-size: 1.1rem;
        }
        
        .participant-list li i {
            color: var(--primary-color);
            margin-right: 10px;
            font-size: 1.3rem;
        }
        
        .form-custom {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .form-control {
            border: 2px solid var(--secondary-color);
            border-radius: 8px;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
        }
        
        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-size: 1.1rem;
        }
        
        .btn-custom:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            color: white;
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .benefits-section {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            margin: 40px 0;
        }
    </style>
</head>
<body>
    <section class="hero-section-volunteer animate-fade-in">
        <div class="container">
            <div class="logo-container-volunteer">
                <img src="{{ asset('img/yolo.jpeg') }}" 
                     class="img-fluid rounded-circle" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">¿Cómo Ser Parte?</h1>
            <p class="lead fs-4">Únete a nuestra comunidad de lectura</p>
        </div>
    </section>

    <div class="container">
        <section class="my-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-custom">
                        <div class="card-header card-header-custom text-center">
                            <h2 class="mb-0"><i class="fas fa-hands-helping me-2"></i>Voluntariado</h2>
                        </div>
                        <div class="card-body p-4">
                            <p class="fs-5 text-center">
                                Realiza labores de apoyo en actividades virtuales o presenciales: manejo de redes sociales, 
                                préstamo de libros, lectura en voz alta, eventos literarios y talleres.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="volunteer-types">
            <h2 class="section-title text-center">Áreas de Participación</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="volunteer-card">
                        <div class="volunteer-icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h4>Lectura en Voz Alta</h4>
                        <p>Comparte el amor por la lectura con niños y jóvenes</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="volunteer-card">
                        <div class="volunteer-icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <h4>Actividades Virtuales</h4>
                        <p>Manejo de redes sociales y contenido digital</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="volunteer-card">
                        <div class="volunteer-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Eventos Literarios</h4>
                        <p>Organización y apoyo en talleres y actividades</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">¿Quiénes pueden participar?</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <ul class="participant-list">
                        <li><i class="fas fa-user-friends"></i> Ciudadanos interesados en fomentar la lectura</li>
                        <li><i class="fas fa-graduation-cap"></i> Estudiantes que realizan servicio social</li>
                        <li><i class="fas fa-book"></i> Mediadores o promotores de lectura</li>
                        <li><i class="fas fa-heart"></i> Personas apasionadas por la literatura infantil y juvenil</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="benefits-section">
            <h2 class="section-title text-center">Beneficios de Ser Voluntario</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-award fa-2x text-primary mb-3"></i>
                        <h5>Experiencia Valiosa</h5>
                        <p>Desarrolla habilidades en promoción cultural y trabajo comunitario</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-certificate fa-2x text-primary mb-3"></i>
                        <h5>Constancia de Participación</h5>
                        <p>Recibe reconocimiento oficial por tu contribución</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-users fa-2x text-primary mb-3"></i>
                        <h5>Comunidad Activa</h5>
                        <p>Forma parte de una red de amantes de la lectura</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center mb-4">
                        <i class="fas fa-smile fa-2x text-primary mb-3"></i>
                        <h5>Impacto Social</h5>
                        <p>Contribuye al desarrollo cultural de tu comunidad</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Formulario de Voluntariado</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form-custom">
                        <form action="{{ route('voluntariado.send') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo *</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Número de teléfono *</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="tipo_voluntariado" class="form-label">Tipo de voluntariado *</label>
                                        <select class="form-select" id="tipo_voluntariado" name="tipo_voluntariado" required>
                                            <option value="" disabled selected>Seleccione una opción</option>
                                            <option value="omitir">Omitir</option>
                                            <option value="donacion">Donación</option>
                                            <option value="prestamo">Préstamo</option>
                                            <option value="material">Material</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Colaboración voluntaria o mensaje adicional *</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button class="btn btn-custom btn-lg" type="submit">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Solicitud
                                </button>
                            </div>
                        </form>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-4 text-center" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center my-5 py-5">
            <h2 class="mb-4">¡Únete a Nuestra Misión!</h2>
            <p class="fs-5 mb-4">Tu participación puede marcar la diferencia en la vida de muchos niños y jóvenes</p>
            <div class="btn-group-lg">
                <a href="{{ route('blog') }}" class="btn btn-custom btn-lg me-3">Conoce Más</a>
                <a href="{{ route('ubicaciones') }}" class="btn btn-outline-custom btn-lg">Visítanos</a>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
@endsection