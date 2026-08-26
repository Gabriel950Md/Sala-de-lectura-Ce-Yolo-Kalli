@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8B4513;
            --primary-dark: #5E2E0D;
            --secondary-color: #D2B48C;
            --secondary-light: #E6D5B8;
            --accent-color: #A52A2A;
            --light-color: #F5F5DC;
            --dark-color: #3E2723;
            --gold: #C6A15B;
            --cream: #FAF7F0;
            --shadow-sm: 0 10px 30px rgba(0,0,0,0.05);
            --shadow-md: 0 20px 40px rgba(139,69,19,0.1);
            --shadow-lg: 0 30px 60px rgba(139,69,19,0.15);
            --shadow-hover: 0 40px 80px rgba(139,69,19,0.2);
            --transition-smooth: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        body {
            font-family: 'Georgia', serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .hero-section-blog {
            background: linear-gradient(rgba(139, 69, 19, 0.9), rgba(139, 69, 19, 0.7)), 
                        url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 0 0 30px 30px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section-blog::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><path d="M10,50 Q30,30 50,50 T90,50" stroke="white" fill="none" stroke-width="1"/></svg>');
            background-size: 100px 100px;
            animation: movePattern 20s linear infinite;
        }
        
        @keyframes movePattern {
            from { transform: translateX(0); }
            to { transform: translateX(100px); }
        }
        
        .logo-container-blog {
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
        .logo-container-blog img{
    width:92%;
    height:92%;
    object-fit:contain;
    object-position:center;
    border-radius:50%;
}
        
        .section-title {
            color: var(--primary-color);
            font-size: 2.5rem;
            font-weight: 300;
            letter-spacing: 2px;
            text-transform: uppercase;
            border-bottom: none;
            padding-bottom: 20px;
            margin-bottom: 40px;
            position: relative;
        }
        
        .section-title:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--gold), var(--primary-color), var(--gold), transparent);
        }
        
        .section-title:after {
            display: none;
        }
        
        .section-subtitle {
            text-align: center;
            color: var(--primary-dark);
            font-size: 1.1rem;
            font-style: italic;
            margin-bottom: 50px;
            opacity: 0.8;
        }
        
        .card-custom {
            border: none;
            border-radius: 20px;
            box-shadow: var(--shadow-sm);
            transition: var(--transition-smooth);
            background-color: white;
            overflow: hidden;
            margin-bottom: 30px;
            height: 100%;
            position: relative;
        }
        
        .card-custom:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }
        
        .card-header-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 20px 25px;
            border-bottom: none;
            position: relative;
            overflow: hidden;
        }
        
        .card-header-custom::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .btn-custom {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            border: none;
            transition: var(--transition-smooth);
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
            z-index: -1;
        }
        
        .btn-custom:hover::before {
            left: 100%;
        }
        
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(139,69,19,0.3);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 12px 30px;
            border-radius: 50px;
            transition: var(--transition-smooth);
            text-decoration: none;
            display: inline-block;
            margin: 0 5px;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-outline-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            transition: width 0.3s ease;
            z-index: -1;
        }
        
        .btn-outline-custom:hover::before {
            width: 100%;
        }
        
        .btn-outline-custom:hover {
            color: white;
            border-color: transparent;
        }
        
        .partner-section {
            background: linear-gradient(135deg, var(--cream) 0%, white 50%, var(--cream) 100%);
            padding: 80px 0;
            border-radius: 50px 50px 50px 50px;
            margin: 60px 0;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(198, 161, 91, 0.2);
        }
        
        .partner-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold), var(--primary-color), var(--gold), transparent);
        }
        
        .partner-section::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold), var(--primary-color), var(--gold), transparent);
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .gallery-card {
            background-color: white;
            color: var(--dark-color);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .gallery-card .btn-gallery {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            font-weight: bold;
            padding: 15px 35px;
            border-radius: 50px;
            border: none;
            transition: var(--transition-smooth);
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }
        
        .gallery-card .btn-gallery:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(139,69,19,0.3);
        }
        
        .reading-section {
            margin-bottom: 4rem;
        }
        
        .reading-card {
            height: 100%;
        }

        .luxury-carousel-section {
            position: relative;
            padding: 40px 0;
        }
        
        .luxury-carousel {
            border-radius: 40px;
            overflow: hidden;
            position: relative;
        }
        
        .carousel-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(210, 180, 140, 0.3);
            border-radius: 40px;
            padding: 50px 30px;
            box-shadow: var(--shadow-lg);
            position: relative;
        }
        
        .carousel-glass::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 40px;
            padding: 2px;
            background: linear-gradient(135deg, var(--gold), transparent, var(--secondary-color));
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
        }
        
        .carousel-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .carousel-header h2 {
            font-size: 2.2rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
            font-weight: 300;
            letter-spacing: 3px;
        }
        
        .carousel-header p {
            color: var(--primary-color);
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 4px;
            opacity: 0.7;
        }
        
        .carousel-header-decoration {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        
        .decoration-line {
            width: 50px;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }
        
        .decoration-icon {
            color: var(--gold);
            font-size: 1.2rem;
            animation: spin 6s linear infinite;
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .prestige-card {
            background: white;
            border-radius: 30px;
            padding: 40px;
            margin: 20px 0;
            box-shadow: var(--shadow-md);
            transition: var(--transition-smooth);
            border: 1px solid rgba(198, 161, 91, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .prestige-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--gold), var(--secondary-color), var(--gold), var(--primary-color));
            background-size: 200% 100%;
            animation: gradientMove 3s linear infinite;
        }
        
        @keyframes gradientMove {
            0% { background-position: 0% 0; }
            100% { background-position: 200% 0; }
        }
        
        .prestige-card::after {
            content: '';
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(210, 180, 140, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        
        .prestige-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: var(--shadow-hover);
        }
        
        .card-media {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }
        
        @media (min-width: 992px) {
            .card-media {
                flex-direction: row;
                align-items: center;
                gap: 50px;
            }
        }
        
        .logo-frame {
            position: relative;
            width: 200px;
            height: 200px;
            flex-shrink: 0;
        }
        
        .logo-ring {
            position: absolute;
            inset: -10px;
            border: 2px solid var(--gold);
            border-radius: 50%;
            animation: ringPulse 2s ease-out infinite;
        }
        
        .logo-ring:nth-child(2) {
            inset: -15px;
            border-color: var(--secondary-color);
            animation-delay: 0.5s;
        }
        
        .logo-ring:nth-child(3) {
            inset: -20px;
            border-color: var(--primary-color);
            animation-delay: 1s;
        }
        
        @keyframes ringPulse {
            0% {
                transform: scale(1);
                opacity: 0.5;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }
        
        .prestige-logo {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 15px 40px rgba(139, 69, 19, 0.2);
            position: relative;
            z-index: 2;
            transition: var(--transition-smooth);
        }
        
        .prestige-card:hover .prestige-logo {
            transform: scale(1.05) rotate(5deg);
            border-color: var(--gold);
        }
        
        .card-content {
            flex: 1;
            text-align: center;
        }
        
        @media (min-width: 992px) {
            .card-content {
                text-align: left;
            }
        }
        
        .partner-category {
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(135deg, var(--secondary-light), var(--cream));
            border-radius: 50px;
            color: var(--primary-dark);
            font-size: 0.85rem;
            letter-spacing: 1px;
            margin-bottom: 20px;
            border: 1px solid rgba(198, 161, 91, 0.3);
        }
        
        .partner-name-luxury {
            font-size: 2.2rem;
            font-weight: 300;
            color: var(--primary-dark);
            margin-bottom: 15px;
            line-height: 1.2;
        }
        
        .partner-name-luxury span {
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .partner-description-luxury {
            color: var(--dark-color);
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 25px;
            opacity: 0.8;
            font-style: italic;
        }
        
        .partner-stats {
            display: flex;
            gap: 30px;
            justify-content: center;
            margin-top: 20px;
        }
        
        @media (min-width: 992px) {
            .partner-stats {
                justify-content: flex-start;
            }
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .stat-label {
            font-size: 0.8rem;
            color: var(--dark-color);
            opacity: 0.6;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .luxury-indicators {
            bottom: -50px;
        }
        
        .luxury-indicators button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: transparent;
            border: 2px solid var(--secondary-color);
            margin: 0 8px;
            transition: var(--transition-smooth);
            position: relative;
            opacity: 0.5;
        }
        
        .luxury-indicators button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--secondary-color);
            transition: var(--transition-smooth);
        }
        
        .luxury-indicators button.active {
            opacity: 1;
            border-color: var(--gold);
            transform: scale(1.2);
        }
        
        .luxury-indicators button.active::before {
            background: var(--gold);
            width: 25px;
            height: 25px;
        }
        
        .nav-control-luxury {
            width: 60px;
            height: 60px;
            top: 50%;
            transform: translateY(-50%);
            background: white;
            border-radius: 50%;
            opacity: 0;
            transition: var(--transition-smooth);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border: 1px solid rgba(198, 161, 91, 0.3);
        }
        
        .luxury-carousel:hover .nav-control-luxury {
            opacity: 1;
        }
        
        .nav-control-luxury:hover {
            transform: translateY(-50%) scale(1.1);
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border-color: transparent;
        }
        
        .nav-icon-luxury {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.5rem;
            transition: var(--transition-smooth);
        }
        
        .nav-control-luxury:hover .nav-icon-luxury {
            color: white;
        }
        
        .light-effect {
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
            animation: lightMove 10s linear infinite;
            pointer-events: none;
            opacity: 0.5;
        }
        
        @keyframes lightMove {
            0% { transform: translate(0, 0); }
            33% { transform: translate(5%, 5%); }
            66% { transform: translate(-5%, -5%); }
            100% { transform: translate(0, 0); }
        }
        
        .floating-particles {
            position: absolute;
            inset: 0;
            pointer-events: none;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: var(--gold);
            border-radius: 50%;
            opacity: 0.3;
            animation: float 10s linear infinite;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 0.3;
            }
            90% {
                opacity: 0.3;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }
        
        @media (max-width: 991px) {
            .partner-name-luxury {
                font-size: 1.8rem;
                text-align: center;
            }
            
            .logo-frame {
                width: 150px;
                height: 150px;
            }
            
            .nav-control-luxury {
                display: none;
            }
            
            .carousel-glass {
                padding: 30px 15px;
            }
        }
        
        @media (max-width: 767px) {
            .section-title {
                font-size: 2rem;
            }
            
            .partner-name-luxury {
                font-size: 1.5rem;
            }
            
            .logo-frame {
                width: 120px;
                height: 120px;
            }
            
            .luxury-indicators button {
                width: 30px;
                height: 30px;
            }
            
            .luxury-indicators button::before {
                width: 12px;
                height: 12px;
            }
        }
    </style>
</head>
<body>
 
    <section class="hero-section-blog animate-fade-in">
        <div class="container">
            <div class="logo-container-blog">
                <img src="{{ asset('img/yolo.jpeg') }}" 
                     class="img-fluid rounded-circle" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">¿Qué Hacemos?</h1>
            <p class="lead fs-4">Descubre nuestras actividades y servicios</p>
        </div>
    </section>

    <div class="container">
        <section class="reading-section my-5">
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card card-custom reading-card">
                        <div class="card-header card-header-custom text-center">
                            <h3 class="mb-0"><i class="fas fa-book-reader me-2"></i>Acercamiento a la lectura</h3>
                        </div>
                        <div class="card-body p-4 text-center">
                            <p class="fs-5">
                                A través de diferentes actividades literarias: exhibición, consulta y préstamo de libros,
                                lecturas en voz alta, obras de teatro y gestión de talleres.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card card-custom gallery-card reading-card">
                        <div class="card-header card-header-custom text-center">
                            <h3 class="mb-0"><i class="fas fa-images me-2"></i>Galería de la sala de lectura</h3>
                        </div>
                        <div class="card-body p-4 text-center d-flex flex-column">
                            <p class="fs-5 mb-4">
                                Explora nuestra colección de imágenes y momentos especiales en la sala de lectura.
                                ¡Haz clic en el botón para ver más en Facebook!
                            </p>
                            <div class="mt-auto">
                                <a href="https://www.facebook.com/share/1CZnwvuSBn/" target="_blank" class="btn-gallery">
                                    <i class="fab fa-facebook me-2"></i>Ver Galería en Facebook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Préstamo de Libros</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-header card-header-custom">
                            <h4 class="mb-0"><i class="fas fa-home me-2"></i>Para su disfrute en casa</h4>
                        </div>
                        <div class="card-body">
                            <p class="fs-5">Dirigido a la Comunidad educativa de la Secundaria Técnica Agropecuaria #54</p>
                            <ul class="fs-6">
                                <li>Hasta 3 ejemplares por 5 días</li>
                                <li>Extensión de vigencia del préstamo hasta en 3 ocasiones</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-header card-header-custom">
                            <h4 class="mb-0"><i class="fas fa-users me-2"></i>Para actividades literarias</h4>
                        </div>
                        <div class="card-body">
                            <p class="fs-5">Dirigido a familias, docentes y mediadores lectores</p>
                            <ul class="fs-6">
                                <li>Hasta 20 libros por un mes</li>
                                <li>Renovación del préstamo las ocasiones que lo necesiten</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center my-5">
            <div class="btn-group-lg" role="group">
                <a href="{{route('donaciones')}}" class="btn btn-custom btn-lg me-2">Donaciones</a>
                <a href="{{route('prestamo')}}" class="btn btn-outline-custom btn-lg me-2">Préstamo de Libros</a>
                <a href="{{route('ubicaciones')}}" class="btn btn-outline-custom btn-lg">Ubicaciones</a>
            </div>
        </section>

        <section class="partner-section">
            <div class="text-center" ><p1 class="h1"><em>ALIANZAS DE LA SALA</p1></em></div>

            <div class="container luxury-carousel-section">
                <div class="floating-particles" id="particles"></div>

                <div id="luxuryCarousel" class="carousel slide luxury-carousel" data-bs-ride="carousel" data-bs-interval="5000" data-bs-touch="true">
                    
                    <div class="carousel-indicators luxury-indicators">
                        <button type="button" data-bs-target="#luxuryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#luxuryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#luxuryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#luxuryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#luxuryCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#luxuryCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
                        <button type="button" data-bs-target="#luxuryCarousel" data-bs-slide-to="6" aria-label="Slide 7"></button>


                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-glass">
                                <div class="light-effect"></div>
                                <div class="carousel-header">
                                    <div class="carousel-header-decoration">
                                        <span class="decoration-line"></span>
                                        <i class="fas fa-star decoration-icon"></i>
                                        <span class="decoration-line"></span>
                                    </div>
                                </div>
                                
                                <div class="prestige-card">
                                    <div class="card-media">
                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/ca.jpg') }}" class="prestige-logo" alt="Caritas Mexico">
                                        </div>
                                        
                                        <div class="card-content">
                                            <span class="partner-category">
                                                <i class="fas fa-hand-holding-heart me-2"></i>Fundación Humanitaria
                                            </span>
                                            <h3 class="partner-name-luxury">
                                                <span>Cáritas</span> Orizaba A.C
                                            </h3>
                                            <p class="partner-description-luxury">
                                                Construyendo esperanza y solidaridad a través de programas educativos y de desarrollo comunitario. Más de 50 años transformando vidas.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-glass">
                                <div class="light-effect"></div>
                                <div class="carousel-header">
                                    <div class="carousel-header-decoration">
                                        <span class="decoration-line"></span>
                                        <i class="fas fa-star decoration-icon"></i>
                                        <span class="decoration-line"></span>
                                    </div>
                                </div>
                                
                                <div class="prestige-card">
                                    <div class="card-media">
                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/ficcterra.jpeg') }}" class="prestige-logo" alt="ficcterra">
                                        </div>
                                        
                                        <div class="card-content">
                                            <span class="partner-category">
                                                <i class="fas fa-child me-2"></i>Infancia y Educación
                                            </span>
                                            <h3 class="partner-name-luxury">
                                                <span>Ficcterra</span>
                                            </h3>
                                            <p class="partner-description-luxury">
                                                Te recibe un Festival que sostiene y expande la palabra de la tierra y las aguas, narrativas  que se mueven desde la magia del encuentro y la acción colectiva
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-glass">
                                <div class="light-effect"></div>
                                <div class="carousel-header">
                                    <div class="carousel-header-decoration">
                                        <span class="decoration-line"></span>
                                        <i class="fas fa-star decoration-icon"></i>
                                        <span class="decoration-line"></span>
                                    </div>
                                </div>
                                
                                <div class="prestige-card">
                                    <div class="card-media">
                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/colectivo_entre_cumbres_y_costumbres.jpg') }}" class="prestige-logo" alt="Colectivo entre cumbres y costumbres">
                                        </div>
                                        
                                        <div class="card-content">
                                            <span class="partner-category">
                                                <i class="fas fa-feather me-2"></i>Cultura y Tradiciones
                                            </span>
                                            <h3 class="partner-name-luxury">
                                                <span>Entre cumbres</span> y costumbres
                                            </h3>
                                            <p class="partner-description-luxury">
                                                Preservando nuestra cultura y tradiciones a través de la literatura y el arte comunitario, conectando generaciones.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-glass">
                                <div class="light-effect"></div>
                                <div class="carousel-header">
                                    <div class="carousel-header-decoration">
                                        <span class="decoration-line"></span>
                                        <i class="fas fa-star decoration-icon"></i>
                                        <span class="decoration-line"></span>
                                    </div>
                                </div>
                                
                                <div class="prestige-card">
                                    <div class="card-media">
                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/tecnica_54.jpg') }}" class="prestige-logo" alt="TECNICA54">
                                        </div>
                                        
                                        <div class="card-content">
                                            <span class="partner-category">
                                                <i class="fas fa-graduation-cap me-2"></i>Institución Educativa
                                            </span>
                                            <h3 class="partner-name-luxury">
                                                <span>Secundaria</span> Técnica #54
                                            </h3>
                                            <p class="partner-description-luxury">
                                                Formando lectores del futuro con programas educativos innovadores y una biblioteca escolar activa que inspira el aprendizaje.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-glass">
                                <div class="light-effect"></div>
                                <div class="carousel-header">
                                    <div class="carousel-header-decoration">
                                        <span class="decoration-line"></span>
                                        <i class="fas fa-star decoration-icon"></i>
                                        <span class="decoration-line"></span>
                                    </div>
                                </div>
                                
                                <div class="prestige-card">
                                    <div class="card-media">
                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/pensamiento_libre.jpg') }}" class="prestige-logo" alt="Pensamiento Libre">
                                        </div>
                                        
                                        <div class="card-content">
                                            <span class="partner-category">
                                                <i class="fas fa-brain me-2"></i>Pensamiento Crítico
                                            </span>
                                            <h3 class="partner-name-luxury">
                                                <span>Pensamiento</span> Libre
                                            </h3>
                                            <p class="partner-description-luxury">
                                                Donde las ideas encuentran su voz, promoviendo la libertad de expresión y el pensamiento crítico a través de la literatura.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-glass">
                                <div class="light-effect"></div>
                                <div class="carousel-header">
                                    <div class="carousel-header-decoration">
                                        <span class="decoration-line"></span>
                                        <i class="fas fa-star decoration-icon"></i>
                                        <span class="decoration-line"></span>
                                    </div>
                                </div>
                                
                                <div class="prestige-card">
                                    <div class="card-media">
                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/Erase una vez el festival.jpeg') }}" class="prestige-logo" alt="Erase una vez el festival">
                                        </div>
                                        
                                        <div class="card-content">
                                            <span class="partner-category">
                                                <i class="fas fa-brain me-2"></i>Pensamiento Crítico
                                            </span>
                                            <h3 class="partner-name-luxury">
                                                <span>Erase una vez</span>  el festival
                                            </h3>
                                            <p class="partner-description-luxury">
                                                A veces la palabra dicha no alcanza para reflejar todo lo que queremos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-glass">
                                <div class="light-effect"></div>
                                <div class="carousel-header">
                                    <div class="carousel-header-decoration">
                                        <span class="decoration-line"></span>
                                        <i class="fas fa-star decoration-icon"></i>
                                        <span class="decoration-line"></span>
                                    </div>
                                </div>
                                
                                <div class="prestige-card">
                                    <div class="card-media">
                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/Taller cine comunitario Palomitas 1.jpeg') }}" class="prestige-logo" alt="Taller cine comunitario Palomitas 1">
                                        </div>

                                        <div class="logo-frame">
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <div class="logo-ring"></div>
                                            <img src="{{ asset('img/Taller cine comunitario Palomitas 2.jpeg') }}" class="prestige-logo" alt="Taller cine comunitario Palomitas 2">
                                        </div>
                                        
                                        <div class="card-content">
                                            <span class="partner-category">
                                                <i class="fas fa-brain me-2"></i>Pensamiento Crítico
                                            </span>
                                            <h3 class="partner-name-luxury">
                                                <span>Taller cine comunitario</span>  Palomitas
                                            </h3>
                                            <p class="partner-description-luxury">
                                                Donde las infancias imaginan, crean y cuentan su mundo a través del cine.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev nav-control-luxury" type="button" data-bs-target="#luxuryCarousel" data-bs-slide="prev">
                        <span class="nav-icon-luxury" aria-hidden="true">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next nav-control-luxury" type="button" data-bs-target="#luxuryCarousel" data-bs-slide="next">
                        <span class="nav-icon-luxury" aria-hidden="true">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    
    <script>
        function createParticles() {
            const particlesContainer = document.getElementById('particles');
            if (!particlesContainer) return;
            
            for (let i = 0; i < 30; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 10 + 's';
                particle.style.animationDuration = (10 + Math.random() * 10) + 's';
                particle.style.opacity = Math.random() * 0.3;
                particle.style.width = (1 + Math.random() * 3) + 'px';
                particle.style.height = particle.style.width;
                particlesContainer.appendChild(particle);
            }
        }
        
        document.addEventListener('DOMContentLoaded', createParticles);
        
        const carousel = document.getElementById('luxuryCarousel');
        const cards = document.querySelectorAll('.prestige-card');
        
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                bootstrap.Carousel.getInstance(carousel).pause();
            });
            
            card.addEventListener('mouseleave', () => {
                bootstrap.Carousel.getInstance(carousel).cycle();
            });
        });
    </script>
</body>
</html>
@endsection