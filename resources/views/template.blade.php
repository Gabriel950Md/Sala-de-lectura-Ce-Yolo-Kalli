<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ce Yolo Kalli - Sala de Lectura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            padding-top: 76px; 
        }
        
        .navbar-custom {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
            padding: 0.8rem 0;
        }
        
        .navbar-brand-custom {
            color: white !important;
            font-weight: bold;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .navbar-brand-custom:hover {
            color: var(--secondary-color) !important;
            transform: translateY(-1px);
        }
        
        .nav-link-custom {
            color: white !important;
            font-weight: 500;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem !important;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link-custom:hover {
            color: var(--secondary-color) !important;
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-1px);
        }
        
        .nav-link-custom.active {
            background-color: var(--accent-color);
            color: white !important;
        }
        
        .nav-link-custom i {
            margin-right: 8px;
            font-size: 0.9rem;
        }
        
        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.5);
            padding: 0.4rem 0.6rem;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.2rem rgba(210, 180, 140, 0.25);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        
        .admin-link {
            background-color: var(--accent-color);
            color: white !important;
            border-radius: 25px;
            padding: 0.5rem 1.2rem !important;
            margin-left: 0.5rem;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .admin-link:hover {
            background-color: white;
            color: var(--accent-color) !important;
            border-color: var(--accent-color);
            transform: translateY(-1px);
        }
        
        .footer-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 2rem 0;
            margin-top: 3rem;
            text-align: center;
        }
        
        .footer-custom h5 {
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        .footer-custom p {
            margin-bottom: 0.5rem;
        }
        
        .logo-small {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            margin-right: 10px;
            border: 2px solid var(--secondary-color);
        }
        
        /* Responsive adjustments */
        @media (max-width: 991.98px) {
            .navbar-nav {
                text-align: center;
                padding: 1rem 0;
            }
            
            .nav-link-custom {
                margin: 0.3rem 0;
                padding: 0.8rem 1rem !important;
            }
            
            .admin-link {
                margin: 0.5rem 0 0 0;
                display: inline-block;
            }
        }
        
        @media (max-width: 575.98px) {
            .navbar-brand-custom span {
                font-size: 1.1rem;
            }
            
            .logo-small {
                width: 30px;
                height: 30px;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand navbar-brand-custom" href="{{ route('home') }}">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpXmCEj9iHYloZNifuVV3KNAqhXw8DR5QDgQ&s" 
                     alt="Ce Yolo Kalli" class="logo-small">
                <span>Ce Yolo Kalli</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom {{ request()->routeIs('home') ? 'active' : '' }}" 
                           href="{{ route('home') }}">
                            <i class="fas fa-home"></i>Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom {{ request()->routeIs('blog') ? 'active' : '' }}" 
                           href="{{ route('blog') }}">
                            <i class="fas fa-book-open"></i>¿Qué hacemos?
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom {{ request()->routeIs('comoserparte') ? 'active' : '' }}" 
                           href="{{ route('comoserparte') }}">
                            <i class="fas fa-hands-helping"></i>¿Cómo ser parte?
                        </a>
                    </li>
                    
                    
                    <li class="nav-item">
                        @auth
                            <a class="nav-link nav-link-custom admin-link" href="{{ route('dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        @else
                            <a class="nav-link nav-link-custom admin-link" href="{{ route('login') }}">
                                <i class="fas fa-sign-in-alt"></i>{{ __("¿Eres administrador?") }} Inicia sesión
                            </a>
                        @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="content">
        @yield('content')
    </main>

    <footer class="footer-custom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h5>
                        <i class="fas fa-book-reader me-2"></i>SALA DE LECTURA CE YOLLO KALLI
                    </h5>
                    <p class="mb-0">"Una Casa Corazón" - Nombre en náhuatl</p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <p class="mb-1">
                        <i class="fas fa-map-marker-alt me-2"></i>Secundaria Técnica Agropecuaria #54, Zongolica, Veracruz
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-clock me-2"></i>Lunes a Viernes: 3:00 PM - 6:00 PM | Sábados: 10:00 AM - 2:00 PM
                    </p>
                </div>
            </div>
            <hr style="border-color: rgba(255,255,255,0.2); margin: 1.5rem 0;">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0">&copy; {{ date('Y') }} Ce Yolo Kalli. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const currentPath = window.location.pathname;
            const navLinks = document.querySelectorAll('.nav-link-custom');
            
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
</body>
</html>