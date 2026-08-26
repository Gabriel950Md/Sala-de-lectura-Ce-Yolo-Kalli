<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Préstamos - Ce Yolo Kalli</title>
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
        
        .form-card {
            background: white;
            border-radius: var(--card-radius);
            padding: clamp(1.5rem, 3vw, 2.5rem);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 2rem;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .table-card {
            background: white;
            border-radius: var(--card-radius);
            padding: clamp(1.5rem, 3vw, 2rem);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(0, 0, 0, 0.05);
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
        
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(min(250px, 100%), 1fr));
            gap: clamp(1rem, 2vw, 1.5rem);
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
        }
        
        .form-label {
            font-weight: 500;
            color: var(--dark-color);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        
        .form-input {
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: var(--transition);
            background: white;
        }
        
        .form-input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
        }
        
        .form-select {
            padding: 0.75rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: var(--transition);
            background: white;
            cursor: pointer;
        }
        
        .form-select:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.3);
        }
        
        .table-container {
            overflow-x: auto;
            border-radius: 8px;
        }
        
        .data-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        
        .data-table th {
            background: linear-gradient(135deg, var(--primary-color), var(--dark-color));
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .data-table td {
            padding: 1rem;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.9rem;
        }
        
        .data-table tr:hover {
            background: #f8f9fa;
        }
        
        .status-badge {
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
            display: inline-block;
        }
        
        .status-prestado {
            background: #fef3c7;
            color: #92400e;
        }
        
        .status-devuelto {
            background: #d1fae5;
            color: #065f46;
        }
        
        .status-vencido {
            background: #fee2e2;
            color: #991b1b;
        }
        
        .action-buttons {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-edit {
            background: var(--secondary-color);
            color: var(--dark-color);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.85rem;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .btn-edit:hover {
            background: #c19a6b;
            transform: translateY(-1px);
        }
        
        .btn-delete {
            background: #dc2626;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.85rem;
            transition: var(--transition);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .btn-delete:hover {
            background: #b91c1c;
            transform: translateY(-1px);
        }
        
        .btn-devolver {
            background: #10b981;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 6px;
            font-size: 0.85rem;
            transition: var(--transition);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .btn-devolver:hover {
            background: #059669;
            transform: translateY(-1px);
        }
        
        .empty-state {
            text-align: center;
            padding: 3rem 2rem;
            color: #6b7280;
        }
        
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }
        
        .alert-success {
            background: #d1fae5;
            border: 1px solid #a7f3d0;
            color: #065f46;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .alert-error {
            background: #fee2e2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
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
        .sidebar-collapsed .sidebar-subtitle,
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
        
        .sidebar-collapsed .menu-item {
            padding: 0.85rem 0.5rem;
            justify-content: center;
            margin: 0.2rem 0.5rem;
            border-radius: 8px;
        }
        
        .sidebar-collapsed .menu-item i {
            margin-right: 0;
            font-size: 1.2rem;
        }
        
        .sidebar-collapsed + .main-content {
            margin-left: var(--sidebar-collapsed-width);
        }
        
        .sidebar-collapsed .sidebar-toggle i {
            transform: rotate(180deg);
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
            
            .form-grid {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
            }
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
        
        .vencido {
            color: #dc2626;
            font-weight: 600;
        }
        
        .proximo-vencer {
            color: #f59e0b;
            font-weight: 500;
        }
.nav-tabs {
    border-bottom: 2px solid #e2e8f0;
    margin-bottom: 1.5rem;
}

.nav-tabs .nav-link {
    border: none;
    color: #718096;
    font-weight: 500;
    padding: 0.75rem 1.5rem;
    border-radius: 8px 8px 0 0;
    transition: var(--transition);
}

.nav-tabs .nav-link:hover {
    color: var(--primary-color);
    background: rgba(139, 69, 19, 0.05);
}

.nav-tabs .nav-link.active {
    color: var(--primary-color);
    background: white;
    border-bottom: 3px solid var(--primary-color);
}

.tab-content {
    padding-top: 1rem;
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
                    <h1>Administración de Préstamos 📚</h1>
                    <p>Gestión de préstamos activos - Ce Yolo Kalli</p>
                </div>
                
                <div class="user-menu">
                    <div class="user-avatar" title="{{ Auth::user()->email }}">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                </div>
            </header>

            <div class="content-area">
                @if (session('success'))
                    <div class="alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert-error">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ session('error') }}
                    </div>
                @endif

                <div class="form-card">
                    <h3 class="section-title">
                        <i class="fas fa-plus-circle"></i>
                        Registrar Nuevo Préstamo
                    </h3>
                    
                    <form action="{{ route('prestamosl.store') }}" method="POST" id="prestamoForm">
                        @csrf
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="nombre_libro" class="form-label">Nombre del Libro</label>
                                <input type="text"
       name="nombre_libro"
       id="nombre_libro"
       class="form-input"
       list="listaLibros"
       required>

<datalist id="listaLibros">
@foreach($libros as $libro)
<option value="{{ $libro->nombre }}" data-id="{{ $libro->idLibro }}"></option>
@endforeach
</datalist>
                                @error('nombre_libro')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="a_quien" class="form-label">Prestado a</label>
                                <input type="text" name="a_quien" id="a_quien" class="form-input" value="{{ old('a_quien') }}" required>
                                @error('a_quien')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" name="telefono" id="telefono" class="form-input" value="{{ old('telefono') }}" required>
                                @error('telefono')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="id_libro" class="form-label">ID del Libro</label>
                                <input type="text"
       name="id_libro"
       id="id_libro"
       class="form-input"
       list="listaIdLibros"
       required>

<datalist id="listaIdLibros">
@foreach($libros as $libro)
<option value="{{ $libro->idLibro }}"></option>
@endforeach
</datalist>
                                @error('id_libro')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="fecha_prestamo" class="form-label">Fecha de Préstamo</label>
                                <input type="date" name="fecha_prestamo" id="fecha_prestamo" class="form-input" value="{{ old('fecha_prestamo', date('Y-m-d')) }}" required>
                                @error('fecha_prestamo')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="fecha_devolucion" class="form-label">Fecha de Devolución</label>
                                <input type="date" name="fecha_devolucion" id="fecha_devolucion" class="form-input" value="{{ old('fecha_devolucion') }}" required>
                                @error('fecha_devolucion')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn-primary">
                                <i class="fas fa-save"></i>
                                Registrar Préstamo
                            </button>
                        </div>
                    </form>
                </div>

                <div class="table-card">
                    <h3 class="section-title">
                        <i class="fas fa-list"></i>
                        Lista de Préstamos Activos
                    </h3>

                    @if(isset($prestamoss) && $prestamoss->count() > 0)
                        <div class="table-container">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Libro</th>
                                        <th>Prestado a</th>
                                        <th>Teléfono</th>
                                        <th>ID Libro</th>
                                        <th>Fecha Préstamo</th>
                                        <th>Fecha Devolución</th>
                                        <th>Estatus</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($prestamoss as $prestamo)
                                        @php
                                            $hoy = now();
                                            $devolucion = \Carbon\Carbon::parse($prestamo->fecha_devolucion);
                                            $diasRestantes = $hoy->diffInDays($devolucion, false);
                                            
                                            $claseFecha = '';
                                            if ($diasRestantes < 0) {
                                                $claseFecha = 'vencido';
                                            } elseif ($diasRestantes <= 2) {
                                                $claseFecha = 'proximo-vencer';
                                            }
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $prestamo->nombre_libro }}</td>
                                            <td>{{ $prestamo->a_quien }}</td>
                                            <td>{{ $prestamo->telefono }}</td>
                                            <td>{{ $prestamo->id_libro }}</td>
                                            <td>{{ \Carbon\Carbon::parse($prestamo->fecha_prestamo)->format('d/m/Y') }}</td>
                                            <td class="{{ $claseFecha }}">
                                                {{ \Carbon\Carbon::parse($prestamo->fecha_devolucion)->format('d/m/Y') }}
                                                @if($diasRestantes < 0)
                                                    <br><small class="text-danger">¡Vencido!</small>
                                                @elseif($diasRestantes <= 2)
                                                    <br><small class="text-warning">Próximo a vencer</small>
                                                @endif
                                            </td>
                                            <td>
                                                @if(isset($prestamo->estatus))
                                                    <span class="status-badge {{ $prestamo->estatus === 'prestado' ? 'status-prestado' : 'status-devuelto' }}">
                                                        {{ ucfirst($prestamo->estatus) }}
                                                    </span>
                                                @else
                                                    <span class="status-badge status-prestado">
                                                        Prestado
                                                    </span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="action-buttons">
                                                    @if(!isset($prestamo->estatus) || $prestamo->estatus === 'prestado')
                                                        <form action="{{ route('prestamos.marcar-devuelto', $prestamo->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn-devolver" onclick="return confirm('¿Marcar este préstamo como devuelto?')">
                                                                <i class="fas fa-check"></i>
                                                                Devolver
                                                            </button>
                                                        </form>
                                                    @endif
                                                    
                                                    <a href="{{ route('prestamosl_edit', $prestamo->id) }}" class="btn-edit">
                                                        <i class="fas fa-edit"></i>
                                                        Editar
                                                    </a>
                                                    <form action="{{ route('prestamosl.destroy', $prestamo->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este préstamo?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-delete">
                                                            <i class="fas fa-trash"></i>
                                                            Eliminar
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="empty-state">
                            <i class="fas fa-book-open"></i>
                            <h4>No hay préstamos registrados</h4>
                            <p>Comienza registrando el primer préstamo</p>
                        </div>
                    @endif
                </div>
<div class="table-card mt-4">
    <h3 class="section-title">
        <i class="fas fa-history"></i>
        Historial Completo de Préstamos
    </h3>

    @if(isset($todosPrestamos) && $todosPrestamos->count() > 0)
        <div class="table-container">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Libro</th>
                        <th>Prestado a</th>
                        <th>Teléfono</th>
                        <th>ID Libro</th>
                        <th>Fecha Préstamo</th>
                        <th>Fecha Devolución</th>
                        <th>Estatus</th>
                        <th>Fecha Registro</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($todosPrestamos as $prestamo)
                        @php
                            $hoy = now();
                            $devolucion = \Carbon\Carbon::parse($prestamo->fecha_devolucion);
                            $diasRestantes = $hoy->diffInDays($devolucion, false);
                            
                            $claseFecha = '';
                            $statusClass = '';
                            
                            if (isset($prestamo->estatus)) {
                                if ($prestamo->estatus === 'prestado') {
                                    $statusClass = 'status-prestado';
                                    if ($diasRestantes < 0) {
                                        $claseFecha = 'vencido';
                                    } elseif ($diasRestantes <= 2) {
                                        $claseFecha = 'proximo-vencer';
                                    }
                                } else {
                                    $statusClass = 'status-devuelto';
                                }
                            } else {
                                $statusClass = 'status-prestado';
                            }
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $prestamo->nombre_libro }}</td>
                            <td>{{ $prestamo->a_quien }}</td>
                            <td>{{ $prestamo->telefono }}</td>
                            <td>{{ $prestamo->id_libro }}</td>
                            <td>{{ \Carbon\Carbon::parse($prestamo->fecha_prestamo)->format('d/m/Y') }}</td>
                            <td class="{{ $claseFecha }}">
                                {{ \Carbon\Carbon::parse($prestamo->fecha_devolucion)->format('d/m/Y') }}
                                @if($diasRestantes < 0 && (!isset($prestamo->estatus) || $prestamo->estatus === 'prestado'))
                                    <br><small class="text-danger">¡Vencido!</small>
                                @elseif($diasRestantes <= 2 && (!isset($prestamo->estatus) || $prestamo->estatus === 'prestado'))
                                    <br><small class="text-warning">Próximo a vencer</small>
                                @endif
                            </td>
                            <td>
                                @if(isset($prestamo->estatus))
                                    <span class="status-badge {{ $statusClass }}">
                                        {{ ucfirst($prestamo->estatus) }}
                                    </span>
                                @else
                                    <span class="status-badge status-prestado">
                                        Prestado
                                    </span>
                                @endif
                            </td>
                            <td>
                                {{ \Carbon\Carbon::parse($prestamo->created_at)->format('d/m/Y H:i') }}
                            </td>
                            <td>
                                <div class="action-buttons">
                                    @if(!isset($prestamo->estatus) || $prestamo->estatus === 'prestado')
                                        <form action="{{ route('prestamos.marcar-devuelto', $prestamo->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="btn-devolver" onclick="return confirm('¿Marcar este préstamo como devuelto?')">
                                                <i class="fas fa-check"></i>
                                                Devolver
                                            </button>
                                        </form>
                                    @endif
                                    
                                    <a href="{{ route('prestamosl_edit', $prestamo->id) }}" class="btn-edit">
                                        <i class="fas fa-edit"></i>
                                        Editar
                                    </a>
                                    <form action="{{ route('prestamosl.destroy', $prestamo->id) }}" method="POST" onsubmit="return confirm('¿Seguro que deseas eliminar este préstamo?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete">
                                            <i class="fas fa-trash"></i>
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="empty-state">
            <i class="fas fa-book-open"></i>
            <h4>No hay préstamos registrados</h4>
            <p>Comienza registrando el primer préstamo</p>
        </div>
    @endif
</div>
            </div>
        </div>


        

        <button class="menu-toggle" id="mobileMenuToggle">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    
    <script>
        const sidebar = document.querySelector('.sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');

        sidebarToggle.addEventListener('click', function() {
            sidebar.classList.toggle('sidebar-collapsed');
        });

        mobileMenuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('mobile-open');
        });

        const menuLinks = document.querySelectorAll('.sidebar-menu a');
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('mobile-open');
                }
            });
        });

        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert-success, .alert-error');
            alerts.forEach(alert => {
                alert.style.display = 'none';
            });
        }, 5000);

        document.getElementById('prestamoForm').addEventListener('submit', function(e) {
            const fechaPrestamo = new Date(document.getElementById('fecha_prestamo').value);
            const fechaDevolucion = new Date(document.getElementById('fecha_devolucion').value);
            
            if (fechaDevolucion < fechaPrestamo) {
                e.preventDefault();
                alert('⚠️ La fecha de devolución no puede ser anterior a la fecha de préstamo.');
                document.getElementById('fecha_devolucion').focus();
            }
        });

        document.getElementById('fecha_prestamo').addEventListener('change', function() {
            const fechaPrestamo = new Date(this.value);
            if (!isNaN(fechaPrestamo.getTime())) {
                const fechaDevolucion = new Date(fechaPrestamo);
                fechaDevolucion.setDate(fechaDevolucion.getDate() + 15); // 15 días de préstamo
                
                const fechaDevolucionInput = document.getElementById('fecha_devolucion');
                const formattedDate = fechaDevolucion.toISOString().split('T')[0];
                fechaDevolucionInput.value = formattedDate;
                fechaDevolucionInput.min = this.value;
            }
        });

        document.getElementById('fecha_prestamo').addEventListener('change', function() {
            document.getElementById('fecha_devolucion').min = this.value;
        });
    </script>
</body>
</html>