<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Ce Yolo Kalli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
        }

        .content-area {
            padding: clamp(1rem, 3vw, 2rem);
        }

        .welcome-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: var(--card-radius);
            padding: clamp(1.5rem, 4vw, 2.5rem);
            margin-bottom: 2rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .welcome-card::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" fill="rgba(255,255,255,0.05)"><circle cx="50" cy="50" r="40"/></svg>');
            animation: float 20s infinite linear;
        }
        
        .welcome-content {
            position: relative;
            z-index: 2;
        }
        
        .welcome-icon {
            font-size: clamp(2rem, 6vw, 3rem);
            margin-bottom: 1rem;
            opacity: 0.9;
        }
        
        .welcome-card h2 {
            font-size: clamp(1.3rem, 4vw, 1.8rem);
        }
        
        .welcome-card p {
            font-size: clamp(0.9rem, 2vw, 1rem);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(280px, 100%), 1fr));
            gap: clamp(1rem, 3vw, 1.5rem);
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background: white;
            border-radius: var(--card-radius);
            padding: clamp(1rem, 3vw, 1.5rem);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: var(--transition);
            border: 1px solid rgba(0, 0, 0, 0.05);
            min-height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }
        
        .stat-icon {
            width: clamp(50px, 8vw, 60px);
            height: clamp(50px, 8vw, 60px);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1.2rem, 3vw, 1.5rem);
            margin-bottom: 1rem;
        }
        
        .stat-icon.books {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            color: white;
        }
        
        .stat-icon.loans {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            color: white;
        }
        
        .stat-icon.donations {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #2d3748;
        }
        
        .stat-number {
            font-size: clamp(1.5rem, 5vw, 2rem);
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }
        
        .stat-label {
            color: #718096;
            font-size: clamp(0.8rem, 2vw, 0.9rem);
            font-weight: 500;
        }

        .quick-actions {
            background: white;
            border-radius: var(--card-radius);
            padding: clamp(1.5rem, 3vw, 2rem);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-size: clamp(1.1rem, 3vw, 1.25rem);
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(150px, 100%), 1fr));
            gap: clamp(0.75rem, 2vw, 1rem);
        }
        
        .action-btn {
            background: white;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: clamp(1rem, 2vw, 1.5rem);
            text-align: center;
            text-decoration: none;
            color: var(--dark-color);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            min-height: 120px;
        }
        
        .action-btn:hover {
            border-color: var(--primary-color);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(139, 69, 19, 0.15);
        }
        
        .action-icon {
            width: clamp(40px, 6vw, 50px);
            height: clamp(40px, 6vw, 50px);
            border-radius: 12px;
            background: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(1rem, 2vw, 1.25rem);
            color: var(--primary-color);
        }
        
        .action-btn span {
            font-size: clamp(0.8rem, 2vw, 0.9rem);
            font-weight: 500;
        }

        .activity-list {
            background: white;
            border-radius: var(--card-radius);
            padding: clamp(1.5rem, 3vw, 2rem);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        .activity-item {
            display: flex;
            align-items: center;
            padding: clamp(0.75rem, 2vw, 1rem) 0;
            border-bottom: 1px solid #e2e8f0;
        }
        
        .activity-item:last-child {
            border-bottom: none;
        }
        
        .activity-icon {
            width: clamp(35px, 6vw, 40px);
            height: clamp(35px, 6vw, 40px);
            border-radius: 10px;
            background: var(--light-color);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: clamp(0.75rem, 2vw, 1rem);
            color: var(--primary-color);
            flex-shrink: 0;
        }
        
        .activity-content {
            flex: 1;
            min-width: 0;
        }
        
        .activity-title {
            font-weight: 500;
            margin-bottom: 0.25rem;
            font-size: clamp(0.9rem, 2vw, 1rem);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .activity-time {
            color: #718096;
            font-size: clamp(0.75rem, 2vw, 0.85rem);
        }

        @keyframes float {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.6s ease-out;
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
        
        .sidebar-collapsed .menu-item:hover,
        .sidebar-collapsed .menu-item.active {
            background: rgba(255, 255, 255, 0.15);
            border-left-color: var(--secondary-color);
            transform: none;
        }
        
        .sidebar-collapsed + .main-content {
            margin-left: var(--sidebar-collapsed-width);
        }
        
        .sidebar-collapsed .sidebar-toggle i {
            transform: rotate(180deg);
        }
        
        .menu-item {
            position: relative;
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
        
        .sidebar-collapsed .menu-item:hover::after,
        .sidebar-collapsed .menu-item:hover::before {
            opacity: 1;
            visibility: visible;
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
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .actions-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .header-title h1 {
                font-size: 1.3rem;
            }
        }
        
        @media (max-width: 576px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .actions-grid {
                grid-template-columns: 1fr;
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
            
            .welcome-card {
                padding: 1.5rem;
            }
            
            .stat-card {
                min-height: 160px;
            }
            
            .action-btn {
                min-height: 100px;
            }
        }
        
        @media (max-width: 360px) {
            .sidebar {
                width: 100%;
            }
            
            .content-area {
                padding: 0.75rem;
            }
            
            .welcome-card {
                padding: 1.25rem;
                margin-bottom: 1.5rem;
            }
            
            .stat-card,
            .quick-actions,
            .activity-list {
                padding: 1.25rem;
            }
            
            .menu-item {
                padding: 0.75rem 1rem;
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
        
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
            
            .fade-in-up {
                animation: none;
            }
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
                    <i class="fas fa-gift"></i>
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
                    <h1>Bienvenido, {{ Auth::user()->name }}! 😊</h1>
                    <p>Panel de control - Ce Yolo Kalli</p>
                </div>
                
                <div class="user-menu">
                    <div class="user-avatar" title="{{ Auth::user()->email }}">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                </div>
            </header>

            <div class="content-area">
                <div class="welcome-card fade-in-up">
                    <div class="welcome-content">
                        <div class="welcome-icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h2>¡Haz iniciado sesión correctamente!</h2>
                        <p class="mb-3">Bienvenido al sistema de administración de la sala de lectura Ce Yolo Kalli.</p>
                        <p>Desde aquí podrás gestionar todos los aspectos de la sala de lectura.</p>
                    </div>
                </div>

                <div class="stats-grid fade-in-up">
                    <div class="stat-card">
                        <div class="stat-icon books">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="stat-number">{{ $totalLibros }}</div>
                        <div class="stat-label">Libros en Inventario</div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon loans">
                            <i class="fas fa-hand-holding"></i>
                        </div>
                        <div class="stat-number">{{ $prestamosActivos }}</div>
                        <div class="stat-label">Préstamos Activos</div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon donations">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="stat-number">{{ $totalDonaciones }}</div>
                        <div class="stat-label">Donaciones Totales</div>
                    </div>
                </div>

                <div class="quick-actions fade-in-up">
                    <h3 class="section-title">
                        <i class="fas fa-bolt"></i>
                        Acciones Rápidas
                    </h3>
                    <div class="actions-grid">
                        <a href="{{ route('librosp') }}" class="action-btn">
                            <div class="action-icon">
                                <i class="fas fa-plus"></i>
                            </div>
                            <span>Agregar Libro</span>
                        </a>
                        <a href="{{ route('prestamosl') }}" class="action-btn">
                            <div class="action-icon">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <span>Gestionar Préstamos</span>
                        </a>
                        <a href="{{ route('donadores') }}" class="action-btn">
                            <div class="action-icon">
                                <i class="fas fa-gift"></i>
                            </div>
                            <span>Ver Donaciones</span>
                        </a>
                    </div>
                </div>

                <div class="activity-list fade-in-up">
    <h3 class="section-title">
        <i class="fas fa-star"></i>
        Libros Más Prestados
    </h3>

    @if(isset($librosMasPrestados) && count($librosMasPrestados) > 0)
        @foreach($librosMasPrestados as $libro)
            <div class="activity-item">
                <div class="activity-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="activity-content">
                    <div class="activity-title">{{ $libro->nombre_libro }}</div>
                    <div class="activity-time">
                        Prestado {{ $libro->total_prestamos }} veces
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center py-4">
            <i class="fas fa-book-open text-muted fa-2x mb-3"></i>
            <p class="text-muted">No hay datos de préstamos todavía</p>
        </div>
    @endif
</div>
<br>

                <div class="activity-list fade-in-up">
                    <h3 class="section-title">
                        <i class="fas fa-history"></i>
                        Actividad Reciente
                    </h3>
                    
                    @if(count($actividadReciente) > 0)
                        @foreach($actividadReciente as $actividad)
                            <div class="activity-item">
                                <div class="activity-icon">
                                    <i class="{{ $actividad['icono'] }}"></i>
                                </div>
                                <div class="activity-content">
                                    <div class="activity-title">{{ $actividad['titulo'] }}</div>
                                    <div class="activity-time">{{ $actividad['tiempo'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-4">
                            <i class="fas fa-info-circle text-muted fa-2x mb-3"></i>
                            <p class="text-muted">No hay actividad reciente para mostrar</p>
                        </div>
                    @endif
                </div>
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
        const mainContent = document.querySelector('.main-content');

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

        const menuLinks = document.querySelectorAll('.sidebar-menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('mobile-open');
                    overlay.classList.remove('overlay-active');
                }
            });
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                sidebar.classList.remove('mobile-open');
                overlay.classList.remove('overlay-active');
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.fade-in-up');
            elements.forEach((element, index) => {
                element.style.animationDelay = `${index * 0.1}s`;
            });
        });

        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (sidebar.classList.contains('mobile-open')) {
                    sidebar.classList.remove('mobile-open');
                    overlay.classList.remove('overlay-active');
                }
                if (sidebar.classList.contains('sidebar-collapsed')) {
                    sidebar.classList.remove('sidebar-collapsed');
                }
            }
        });
    </script>
</body>
</html>