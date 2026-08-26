<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Préstamo - Ce Yolo Kalli</title>
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
        
        .form-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            max-width: 600px;
            margin: 2rem auto;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
        }
        
        .form-label {
            font-weight: 500;
            color: var(--dark-color);
        }
        
        .form-control {
            border: 2px solid #e2e8f0;
            border-radius: 8px;
            padding: 0.75rem;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h2 class="text-center mb-4">
                <i class="fas fa-edit"></i>
                Editar Préstamo
            </h2>
            
            <form action="{{ route('prestamosl.update', $prestamo->id) }}" method="POST" id="editForm">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre_libro" class="form-label">Nombre del libro</label>
                    <input type="text" name="nombre_libro" class="form-control" value="{{ old('nombre_libro', $prestamo->nombre_libro) }}" required>
                    @error('nombre_libro')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="a_quien" class="form-label">Prestado a</label>
                    <input type="text" name="a_quien" class="form-control" value="{{ old('a_quien', $prestamo->a_quien) }}" required>
                    @error('a_quien')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $prestamo->telefono) }}" required>
                    @error('telefono')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="id_libro" class="form-label">ID del libro</label>
                    <input type="text" name="id_libro" class="form-control" value="{{ old('id_libro', $prestamo->id_libro) }}" required>
                    @error('id_libro')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha_prestamo" class="form-label">Fecha de préstamo</label>
                    <input type="date" name="fecha_prestamo" class="form-control" value="{{ old('fecha_prestamo', $prestamo->fecha_prestamo) }}" required>
                    @error('fecha_prestamo')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="fecha_devolucion" class="form-label">Fecha de devolución</label>
                    <input type="date" name="fecha_devolucion" class="form-control" value="{{ old('fecha_devolucion', $prestamo->fecha_devolucion) }}" required>
                    @error('fecha_devolucion')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                @if(isset($prestamo->estatus))
                <div class="mb-3">
                    <label for="estatus" class="form-label">Estatus</label>
                    <select name="estatus" class="form-control" required>
                        <option value="prestado" {{ $prestamo->estatus == 'prestado' ? 'selected' : '' }}>Prestado</option>
                        <option value="devuelto" {{ $prestamo->estatus == 'devuelto' ? 'selected' : '' }}>Devuelto</option>
                    </select>
                </div>
                @endif

                <div class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('prestamosl') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Guardar Cambios
                    </button>
                </div>
            </form>

            <script>
                document.getElementById('editForm').addEventListener('submit', function (e) {
                    const prestamo = new Date(document.querySelector('[name="fecha_prestamo"]').value);
                    const devolucion = new Date(document.querySelector('[name="fecha_devolucion"]').value);

                    if (devolucion < prestamo) {
                        e.preventDefault();
                        alert('⚠️ La fecha de devolución no puede ser anterior a la fecha de préstamo.');
                    }
                });
            </script>
        </div>
    </div>
</body>
</html>