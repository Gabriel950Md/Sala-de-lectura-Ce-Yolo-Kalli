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
        
        .hero-section-donations {
            background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(139, 69, 19, 0.8)), 
                        url('https://images.unsplash.com/photo-1532012197227-501c855f5e4a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 0 0 20px 20px;
        }
        
        .logo-container-donations {
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
        .logo-container-donations img{
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
        
        .donation-info {
            background-color: var(--secondary-color);
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
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
        
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .quote-section {
            background-color: var(--secondary-color);
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            text-align: center;
            font-style: italic;
            position: relative;
        }
        
        .quote-section:before {
            content: """;
            font-size: 60px;
            color: var(--primary-color);
            opacity: 0.3;
            position: absolute;
            top: -10px;
            left: 20px;
            font-family: Georgia, serif;
        }
    </style>
</head>
<body>
    <section class="hero-section-donations animate-fade-in">
        <div class="container">
            <div class="logo-container-donations">
                <img src="{{ asset('img/yolo.jpeg') }}" 
                     class="img-fluid rounded-circle" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">Donaciones</h1>
            <p class="lead fs-4">Tu contribución ayuda a fomentar la lectura</p>
        </div>
    </section>

    <div class="container">
        <section class="text-center my-4">
            <div class="btn-group-lg" role="group">
                <a href="{{route('donaciones')}}" class="btn btn-custom btn-lg me-2">Donaciones</a>
                <a href="{{route('prestamo')}}" class="btn btn-outline-custom btn-lg me-2">Préstamo de Libros</a>
                <a href="{{route('ubicaciones')}}" class="btn btn-outline-custom btn-lg">Ubicaciones</a>
            </div>
        </section>

        <section class="my-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="quote-section">
                        <p class="fs-4 mb-0">"No hay mejor momento para cambiar el rumbo de nuestra vida que el de ahora"</p>
                    </div>
                    
                    <div class="card card-custom">
                        <div class="card-header card-header-custom text-center">
                            <h3 class="mb-0"><i class="fas fa-gift me-2"></i>¿Qué puedo donar?</h3>
                        </div>
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-6 text-center mb-3">
                                    <i class="fas fa-book fa-2x text-primary mb-2"></i>
                                    <h5>Libros de literatura</h5>
                                    <p>Infantil y juvenil</p>
                                </div>
                                <div class="col-md-6 text-center mb-3">
                                    <i class="fas fa-palette fa-2x text-primary mb-2"></i>
                                    <h5>Material didáctico</h5>
                                    <p>Para actividades educativas</p>
                                </div>
                            </div>
                            <div class="alert alert-info text-center mt-3">
                                <i class="fas fa-truck me-2"></i>
                                <strong>¡Si el donativo está en Zongolica, nosotros podemos pasar por él!</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Formulario de Donación</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form-custom">
                        <form method="POST" action="{{ route('donaciones.public.store') }}">
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
                                        <label for="gmail" class="form-label">Correo electrónico *</label>
                                        <input type="email" class="form-control" id="gmail" name="gmail" required>
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
                                        <label for="ubicacion" class="form-label">Ubicación actual *</label>
                                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="tipo_donacion" class="form-label">Tipo de Donación *</label>
                                        <input type="text" class="form-control" id="tipo_donacion" name="tipo_donacion" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mensaje" class="form-label">Mensaje o Pregunta *</label>
                                        <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button class="btn btn-custom btn-lg" type="submit">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Donación
                                </button>
                            </div>
                        </form>
                        
                        @if (session('success'))
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
@endsection