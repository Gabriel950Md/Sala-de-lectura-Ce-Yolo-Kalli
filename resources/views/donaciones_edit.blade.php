<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Donación - Ce Yolo Kalli</title>
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
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
            color: #2d3748;
        }
        
        .edit-container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .edit-header {
            background: white;
            padding: 1.5rem 2rem;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-title h1 {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark-color);
            margin: 0;
        }
        
        .header-title p {
            color: #718096;
            font-size: 0.9rem;
            margin: 0;
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
        }
        
        .form-card {
            background: white;
            border-radius: 16px;
            padding: 2.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            margin: 2rem auto;
            width: 90%;
        }
        
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.5rem;
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
            transition: all 0.3s ease;
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
            transition: all 0.3s ease;
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
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 69, 19, 0.3);
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-secondary:hover {
            background: #5a6268;
            transform: translateY(-2px);
        }
        
        .text-danger {
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }
        
        .badge-libros {
            background: #dbeafe;
            color: #1e40af;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
        }
        
        .badge-mobiliario {
            background: #fef3c7;
            color: #92400e;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
        }
        
        .badge-material {
            background: #d1fae5;
            color: #065f46;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
        }
        
        .badge-monetaria {
            background: #f3e8ff;
            color: #5b21b6;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.8rem;
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
        
        @media (max-width: 768px) {
            .form-card {
                padding: 1.5rem;
                margin: 1rem auto;
            }
            
            .header-title h1 {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="edit-container">
        <header class="edit-header">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-title">
                        <h1>
                            <i class="fas fa-edit"></i>
                            Editar Donación
                        </h1>
                        <p>Actualiza la información de la donación - Ce Yolo Kalli</p>
                    </div>
                    
                    <div class="user-menu">
                        <div class="user-avatar" title="{{ Auth::user()->email }}">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-grow-1 py-4">
            <div class="container">
                <!-- Alertas -->
                @if (session('success'))
                    <div class="alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('success') }}
                    </div>
                @endif

                <div class="form-card">
                    <h3 class="section-title">
                        <i class="fas fa-gift"></i>
                        Información de la Donación
                    </h3>
                    
                    <form action="{{ route('donaciones.update', $donacion->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre Completo</label>
                            <input type="text" name="nombre" id="nombre" 
                                class="form-input" 
                                value="{{ old('nombre', $donacion->nombre) }}" 
                                required
                                placeholder="Ingrese el nombre completo">
                            @error('nombre')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="gmail" class="form-label">Correo Electrónico</label>
                            <input type="email" name="gmail" id="gmail" 
                                class="form-input" 
                                value="{{ old('gmail', $donacion->gmail) }}" 
                                required
                                placeholder="ejemplo@correo.com">
                            @error('gmail')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="tel" name="telefono" id="telefono" 
                                class="form-input" 
                                value="{{ old('telefono', $donacion->telefono) }}" 
                                required
                                placeholder="(XXX) XXX-XXXX">
                            @error('telefono')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tipo_donacion" class="form-label">Tipo de Donación</label>
                            <select name="tipo_donacion" id="tipo_donacion" class="form-select" required>
                                <option value="">Seleccione un tipo</option>
                                <option value="Libros" {{ old('tipo_donacion', $donacion->tipo_donacion) == 'Libros' ? 'selected' : '' }}>
                                    📚 Libros
                                </option>
                                <option value="Mobiliario" {{ old('tipo_donacion', $donacion->tipo_donacion) == 'Mobiliario' ? 'selected' : '' }}>
                                    🪑 Mobiliario
                                </option>
                                <option value="Material" {{ old('tipo_donacion', $donacion->tipo_donacion) == 'Material' ? 'selected' : '' }}>
                                    📌 Material Didáctico
                                </option>
                                <option value="Monetaria" {{ old('tipo_donacion', $donacion->tipo_donacion) == 'Monetaria' ? 'selected' : '' }}>
                                    💰 Donación Monetaria
                                </option>
                            </select>
                            @error('tipo_donacion')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex flex-column flex-md-row gap-2 justify-content-end mt-4">
                            <a href="{{ route('donadores') }}" class="btn btn-secondary text-center">
                                <i class="fas fa-arrow-left"></i>
                                Volver a Donaciones
                            </a>
                            <button type="submit" class="btn btn-primary text-center">
                                <i class="fas fa-save"></i>
                                Guardar Cambios
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <footer class="py-3 bg-white border-top mt-auto">
            <div class="container">
                <div class="text-center text-muted">
                    <small>Ce Yolo Kalli - Sistema de Administración de Donaciones</small>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    
    <script>
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert-success');
            alerts.forEach(alert => {
                alert.style.display = 'none';
            });
        }, 5000);

        document.getElementById('telefono').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 10) value = value.substring(0, 10);
            
            if (value.length >= 3 && value.length <= 6) {
                value = '(' + value.substring(0, 3) + ') ' + value.substring(3);
            } else if (value.length > 6) {
                value = '(' + value.substring(0, 3) + ') ' + value.substring(3, 6) + '-' + value.substring(6);
            }
            
            e.target.value = value;
        });

        document.querySelectorAll('.form-input, .form-select').forEach(input => {
            input.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' && !e.target.type.includes('submit')) {
                    e.preventDefault();
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const firstInput = document.querySelector('.form-input');
            if (firstInput) {
                firstInput.focus();
            }
        });

        const tipoSelect = document.getElementById('tipo_donacion');
        const badgeContainer = document.createElement('div');
        badgeContainer.className = 'mt-2';
        
        function updateBadge() {
            const selectedValue = tipoSelect.value;
            badgeContainer.innerHTML = '';
            
            if (selectedValue) {
                let badgeClass = '';
                let badgeText = '';
                
                switch(selectedValue) {
                    case 'Libros':
                        badgeClass = 'badge-libros';
                        badgeText = '📚 Libros';
                        break;
                    case 'Mobiliario':
                        badgeClass = 'badge-mobiliario';
                        badgeText = '🪑 Mobiliario';
                        break;
                    case 'Material':
                        badgeClass = 'badge-material';
                        badgeText = '📌 Material Didáctico';
                        break;
                    case 'Monetaria':
                        badgeClass = 'badge-monetaria';
                        badgeText = '💰 Donación Monetaria';
                        break;
                }
                
                if (badgeClass) {
                    const badge = document.createElement('span');
                    badge.className = badgeClass;
                    badge.textContent = badgeText;
                    badgeContainer.appendChild(badge);
                }
            }
        }
        
        tipoSelect.addEventListener('change', updateBadge);
        
        tipoSelect.parentNode.appendChild(badgeContainer);
        
        updateBadge();
    </script>
</body>
</html>