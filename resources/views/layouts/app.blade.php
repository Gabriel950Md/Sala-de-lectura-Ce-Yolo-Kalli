<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'Ce Yolo Kalli') }} | Panel de Administración</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        :root {
            --primary-color: #8B4513;
            --primary-light: #a56b3a;
            --secondary-color: #D2B48C;
            --accent-color: #A52A2A;
            --light-color: #F5F5DC;
            --dark-color: #3E2723;
            --sidebar-width: 280px;
            --sidebar-collapsed-width: 80px;
            --header-height: 70px;
            --card-radius: 16px;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            color: #2d3748;
            overflow-x: hidden;
        }
        
        .dashboard-container {
            display: flex;
            min-height: 100vh;
            position: relative;
        }

        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary-color) 0%, var(--dark-color) 100%);
            color: white;
            position: fixed;
            height: 100vh;
            left: 0;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            overflow-x: hidden;
        }
        
        .sidebar-header {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
            position: relative;
            transition: var(--transition);
        }
        
        .sidebar-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 3px solid var(--secondary-color);
            margin: 0 auto 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: var(--transition);
            object-fit: cover;
        }
        
        .sidebar-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            margin-bottom: 0.25rem;
            transition: var(--transition);
            opacity: 1;
            white-space: nowrap;
            overflow: hidden;
        }
        
        .sidebar-subtitle {
            font-size: 0.85rem;
            color: var(--secondary-color);
            opacity: 0.8;
            transition: var(--transition);
            white-space: nowrap;
            overflow: hidden;
        }
        
        .sidebar-menu {
            padding: 1.5rem 0;
        }
        
        .menu-item {
            padding: 0.9rem 1.5rem;
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
            border-left: 4px solid transparent;
            margin: 0.25rem 0;
            position: relative;
            white-space: nowrap;
        }
        
        .menu-item:hover, .menu-item.active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left-color: var(--secondary-color);
        }
        
        .menu-item i {
            width: 24px;
            margin-right: 16px;
            font-size: 1.1rem;
            flex-shrink: 0;
            transition: var(--transition);
            text-align: center;
        }
        
        .menu-badge {
            background: var(--accent-color);
            color: white;
            padding: 0.2rem 0.6rem;
            border-radius: 12px;
            font-size: 0.75rem;
            margin-left: auto;
            transition: var(--transition);
        }
        
        .menu-text {
            transition: var(--transition);
            opacity: 1;
            white-space: nowrap;
            overflow: hidden;
            flex: 1;
        }

        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            transition: var(--transition);
            min-width: 0;
        }
        
        .dashboard-header {
            background: white;
            height: var(--header-height);
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
            gap: 1rem;
        }
        
        .header-title {
            flex: 1;
            min-width: 0;
        }
        
        .header-title h1 {
            font-size: clamp(1.2rem, 4vw, 1.5rem);
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .header-title p {
            color: #718096;
            font-size: clamp(0.8rem, 2vw, 0.9rem);
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex-shrink: 0;
            position: relative;
        }
        
        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.3);
            flex-shrink: 0;
            cursor: pointer;
        }

        .user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            margin-top: 0.5rem;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            min-width: 200px;
            display: none;
            z-index: 1000;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .user-dropdown.show {
            display: block;
            animation: fadeIn 0.2s ease;
        }
        
        .dropdown-item {
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #1e293b;
            text-decoration: none;
            transition: var(--transition);
        }
        
        .dropdown-item:hover {
            background: #f8fafc;
            color: var(--primary-color);
        }
        
        .dropdown-item i {
            width: 20px;
            color: #64748b;
        }
        
        .dropdown-divider {
            height: 1px;
            background: #e2e8f0;
            margin: 0.5rem 0;
        }

        .content-area {
            padding: clamp(1rem, 3vw, 2rem);
        }

        .alert-container {
            position: fixed;
            top: 80px;
            right: 20px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            max-width: 350px;
        }
        
        .alert {
            background: white;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            border-left: 4px solid;
            animation: slideIn 0.3s ease;
        }
        
        .alert-success {
            border-left-color: #10b981;
        }
        
        .alert-success i {
            color: #10b981;
        }
        
        .alert-error {
            border-left-color: #ef4444;
        }
        
        .alert-error i {
            color: #ef4444;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .menu-item::after {
            content: attr(data-tooltip);
            position: absolute;
            left: 100%;
            top: 50%;
            transform: translateY(-50%);
            background: var(--dark-color);
            color: white;
            padding: 0.5rem 0.75rem;
            border-radius: 6px;
            font-size: 0.8rem;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 1002;
            margin-left: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }
        
        .menu-item::before {
            content: '';
            position: absolute;
            left: 100%;
            top: 50%;
            transform: translateY(-50%);
            border: 5px solid transparent;
            border-right-color: var(--dark-color);
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 1003;
            margin-left: 5px;
        }

        .sidebar-toggle {
            position: absolute;
            top: 50%;
            right: -12px;
            transform: translateY(-50%);
            width: 24px;
            height: 24px;
            background: var(--secondary-color);
            border: 2px solid white;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--dark-color);
            font-size: 0.8rem;
            transition: var(--transition);
            z-index: 1001;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }
        
        .sidebar-toggle:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-50%) scale(1.1);
        }

        .sidebar-collapsed {
            width: var(--sidebar-collapsed-width);
        }
        
        .sidebar-collapsed .sidebar-header {
            padding: 1.5rem 0.5rem;
        }
        
        .sidebar-collapsed .sidebar-logo {
            width: 40px;
            height: 40px;
            margin-bottom: 0.5rem;
        }
        
        .sidebar-collapsed .sidebar-title,
        .sidebar-collapsed .sidebar-subtitle {
            opacity: 0;
            visibility: hidden;
            height: 0;
            margin: 0;
            padding: 0;
        }
        
        .sidebar-collapsed .menu-item {
            padding: 0.85rem 0.5rem;
            justify-content: center;
            margin: 0.2rem 0.5rem;
            border-radius: 8px;
            border-left: 4px solid transparent;
        }
        
        .sidebar-collapsed .menu-item i {
            margin-right: 0;
            margin-left: 0;
            width: auto;
            font-size: 1.2rem;
        }
        
        .sidebar-collapsed .menu-text,
        .sidebar-collapsed .menu-badge {
            opacity: 0;
            visibility: hidden;
            width: 0;
            height: 0;
            margin: 0;
            padding: 0;
            position: absolute;
        }
        
        .sidebar-collapsed .menu-item:hover::after,
        .sidebar-collapsed .menu-item:hover::before {
            opacity: 1;
            visibility: visible;
        }
        
        .sidebar-collapsed + .main-content {
            margin-left: var(--sidebar-collapsed-width);
        }
        
        .sidebar-collapsed .sidebar-toggle i {
            transform: rotate(180deg);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.5);
            z-index: 999;
            display: none;
        }
        
        .overlay-active {
            display: block;
        }
        
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark-color);
            cursor: pointer;
            padding: 0.5rem;
            border-radius: 8px;
            transition: var(--transition);
            z-index: 1001;
        }
        
        .menu-toggle:hover {
            background: var(--light-color);
        }

        @media (max-width: 1024px) {
            .sidebar {
                width: var(--sidebar-width);
            }
            
            .main-content {
                margin-left: var(--sidebar-width);
            }
            
            .dashboard-header {
                padding: 0 1.5rem;
            }
        }
        
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 280px;
            }
            
            .sidebar.mobile-open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .sidebar-toggle {
                display: none;
            }
            
            .dashboard-header {
                padding: 0 1rem;
                flex-wrap: wrap;
                height: auto;
                min-height: var(--header-height);
                padding-top: 0.5rem;
                padding-bottom: 0.5rem;
            }
            
            .header-title {
                order: 2;
                flex-basis: 100%;
                text-align: center;
                margin-top: 0.5rem;
            }
            
            .menu-toggle {
                order: 1;
            }
            
            .user-menu {
                order: 1;
                margin-left: auto;
            }
            
            .content-area {
                padding: 1rem;
            }
        }
        
        @media (max-width: 576px) {
            .alert-container {
                top: 60px;
                right: 10px;
                left: 10px;
                max-width: none;
            }
        }
        
        .sidebar::-webkit-scrollbar {
            width: 4px;
        }
        
        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }
        
        .sidebar::-webkit-scrollbar-thumb {
            background: var(--secondary-color);
            border-radius: 2px;
        }
            .content-area form {
        max-width: 600px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        outline: none;
        transition: 0.2s;
    }

    input:focus {
        border-color: #6366f1;
        box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
    }

    button {
        padding: 0.6rem 1.2rem;
        border-radius: 0.5rem;
        font-weight: 500;
        border: none;
        cursor: pointer;
    }

    button[type="submit"] {
        background-color: #1f2937;
        color: white;
    }

    button[type="submit"]:hover {
        background-color: #111827;
    }

    .bg-red-600 {
        background-color: #dc2626 !important;
        color: white !important;
    }

    .bg-red-600:hover {
        background-color: #b91c1c !important;
    }

    .shadow-sm {
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .rounded-lg {
        border-radius: 12px;
    }

    .p-6 {
        padding: 1.5rem;
    }

    .mt-6 {
        margin-top: 1.5rem;
    }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQpXmCEj9iHYloZNifuVV3KNAqhXw8DR5QDgQ&s" 
                     alt="Ce Yolo Kalli" class="sidebar-logo">
                <div class="sidebar-title">Ce Yolo Kalli</div>
                <div class="sidebar-subtitle">Panel de Administración</div>
                
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>
            
            <nav class="sidebar-menu">
                <a href="{{ route('dashboard') }}" class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}" data-tooltip="Inicio">
                    <i class="fas fa-home"></i>
                    <span class="menu-text">Inicio</span>
                </a>
                <a href="{{ route('librosp') }}" class="menu-item {{ request()->routeIs('librosp') ? 'active' : '' }}" data-tooltip="Gestión de Libros">
                    <i class="fas fa-book"></i>
                    <span class="menu-text">Gestión de Libros</span>
                    <span class="menu-badge">{{ $totalLibros ?? 0 }}</span>
                </a>
                <a href="{{ route('prestamosl') }}" class="menu-item {{ request()->routeIs('prestamosl*') ? 'active' : '' }}" data-tooltip="Préstamos Activos">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span class="menu-text">Préstamos Activos</span>
                    <span class="menu-badge">{{ $prestamosActivos ?? 0 }}</span>
                </a>
                <a href="{{ route('donadores') }}" class="menu-item {{ request()->routeIs('donadores*') ? 'active' : '' }}" data-tooltip="Donaciones">
                    <i class="fas fa-gift"></i>
                    <span class="menu-text">Donaciones</span>
                    <span class="menu-badge">{{ $totalDonaciones ?? 0 }}</span>
                </a>
                <a href="{{ route('voluntariado.index') }}" class="menu-item {{ request()->routeIs('voluntariado*') ? 'active' : '' }}" data-tooltip="Voluntariado">
                    <i class="fas fa-hands-helping"></i>
                    <span class="menu-text">Voluntariado</span>
                    <span class="menu-badge">{{ $totalVoluntariado ?? 0 }}</span>
                </a>
                <a href="{{ route('profile.edit') }}" class="menu-item" data-tooltip="Mi Perfil">
                    <i class="fas fa-user-cog"></i>
                    <span class="menu-text">Mi Perfil</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <a href="{{ route('logout') }}" class="menu-item" onclick="event.preventDefault(); this.closest('form').submit();" data-tooltip="Cerrar Sesión">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="menu-text">Cerrar Sesión</span>
                    </a>
                </form>
            </nav>
        </aside>

        <div class="main-content">
            <header class="dashboard-header">
                <button class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="header-title">
                    <h1>@yield('page-title', 'Panel de Administración')</h1>
                    <p>@yield('page-subtitle', 'Ce Yolo Kalli')</p>
                </div>
                
                <div class="user-menu">
                    <div class="user-avatar" id="userAvatar" title="{{ Auth::user()->email ?? 'Usuario' }}">
                        {{ Auth::user() ? strtoupper(substr(Auth::user()->name, 0, 1)) : 'U' }}
                    </div>
                    
                    <div class="user-dropdown" id="userDropdown">
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            <i class="fas fa-user"></i>
                            Mi Perfil
                        </a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item" style="width: 100%; border: none; background: none; cursor: pointer;">
                                <i class="fas fa-sign-out-alt"></i>
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            @isset($header)
                <div class="page-header">
                    <div class="page-header-container">
                        {{ $header }}
                    </div>
                </div>
            @endisset

            <div class="content-area">
                <div class="alert-container" id="alertContainer">
                    @if(session('success'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle"></i>
                            <div class="alert-content">
                                <div class="alert-message">{{ session('success') }}</div>
                            </div>
                            <i class="fas fa-times alert-close" onclick="this.parentElement.remove()"></i>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <div class="alert-content">
                                <div class="alert-message">{{ session('error') }}</div>
                            </div>
                            <i class="fas fa-times alert-close" onclick="this.parentElement.remove()"></i>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <div class="alert-content">
                                <div class="alert-title">Errores de validación</div>
                                <div class="alert-message">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <i class="fas fa-times alert-close" onclick="this.parentElement.remove()"></i>
                        </div>
                    @endif
                </div>

                {{ $slot }}
            </div>
        </div>

        <div class="overlay" id="overlay"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    
    <script>
        const sidebar = document.querySelector('.sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const menuToggle = document.querySelector('.menu-toggle');
        const overlay = document.getElementById('overlay');
        const userAvatar = document.getElementById('userAvatar');
        const userDropdown = document.getElementById('userDropdown');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('sidebar-collapsed');
        });

        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('mobile-open');
            overlay.classList.toggle('overlay-active');
        });

        overlay.addEventListener('click', function() {
            sidebar.classList.remove('mobile-open');
            overlay.classList.remove('overlay-active');
        });

        if (userAvatar && userDropdown) {
            userAvatar.addEventListener('click', function(e) {
                e.stopPropagation();
                userDropdown.classList.toggle('show');
            });

            document.addEventListener('click', function(e) {
                if (!userAvatar.contains(e.target)) {
                    userDropdown.classList.remove('show');
                }
            });
        }

        const menuLinks = document.querySelectorAll('.sidebar-menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('mobile-open');
                    overlay.classList.remove('overlay-active');
                }
            });
        });

        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.style.animation = 'slideIn 0.3s ease reverse';
                setTimeout(() => alert.remove(), 300);
            });
        }, 5000);

        document.querySelectorAll('.alert-close').forEach(btn => {
            btn.addEventListener('click', function() {
                this.parentElement.remove();
            });
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (sidebar.classList.contains('mobile-open')) {
                    sidebar.classList.remove('mobile-open');
                    overlay.classList.remove('overlay-active');
                }
                if (sidebar.classList.contains('sidebar-collapsed')) {
                    sidebar.classList.remove('sidebar-collapsed');
                }
                userDropdown.classList.remove('show');
            }
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('mobile-open');
                overlay.classList.remove('overlay-active');
            }
        });

        const currentPath = window.location.pathname;
        menuLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    </script>


</body>
</html>