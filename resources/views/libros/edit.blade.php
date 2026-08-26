<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro - Ce Yolo Kalli</title>
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
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h2 class="text-center mb-4">
                <i class="fas fa-edit"></i>
                Editar Libro
            </h2>
            
            <form action="{{ route('libros.update', $libro) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Libro</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $libro->nombre }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" name="autor" id="autor" class="form-control" value="{{ $libro->autor }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="estatus" class="form-label">Estatus</label>
                    <select name="estatus" id="estatus" class="form-control" required>
                        <option value="En la Biblioteca" {{ $libro->estatus === 'En la Biblioteca' ? 'selected' : '' }}>En la Biblioteca</option>
                        <option value="Prestado" {{ $libro->estatus === 'Prestado' ? 'selected' : '' }}>Prestado</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label">Genero</label>
                    <input type="text" name="genero" id="genero" class="form-control" value="{{ $libro->genero }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="idLibro" class="form-label">ID del Libro</label>
                    <input type="text" name="idLibro" id="idLibro" class="form-control" value="{{ $libro->idLibro }}" required>
                </div>

                <div class="mb-3">
                    <label for="autor" class="form-label">Observacion</label>
                    <input type="text" name="Observacion" id="Observacion" class="form-control" value="{{ $libro->Observacion }}" required>
                </div>
                
                <div class="d-flex gap-2 justify-content-end">
                    <a href="{{ route('librosp') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i>
                        Cancelar
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i>
                        Actualizar Libro
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>