<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Voluntariado</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <div class="col-md-8">
        <div class="card shadow">
            
            <div class="card-header bg-white py-3">
                <h2 class="h4 fw-bold mb-0">✏️ Editar Voluntariado</h2>
                <p class="text-muted mb-0 mt-1">Actualiza la información del voluntariado - Ce Yolo Kalli</p>
            </div>

            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form action="{{ route('voluntariado.update', $voluntariado->id) }}" method="POST">
    @csrf
    @method('PUT')

    {{-- Nombre --}}
    <div class="mb-4">
        <label class="fw-semibold mb-2">Nombre Completo</label>
        <input type="text" name="nombre" class="form-control"
               value="{{ old('nombre', $voluntariado->nombre) }}">
    </div>

    {{-- Correo --}}
    <div class="mb-4">
        <label class="fw-semibold mb-2">Correo Electrónico</label>
        <input type="email" name="gmail" class="form-control"
               value="{{ old('gmail', $voluntariado->gmail) }}">
    </div>

    {{-- Teléfono --}}
    <div class="mb-4">
        <label class="fw-semibold mb-2">Teléfono</label>
        <input type="text" name="telefono" class="form-control"
               value="{{ old('telefono', $voluntariado->telefono) }}">
    </div>

    {{-- Tipo --}}
    <div class="mb-4">
        <label class="fw-semibold mb-2">Tipo de Voluntariado</label>
        <select name="tipo_voluntariado" class="form-select">
            <option value="">Selecciona una opción</option>
            <option value="Educativo" {{ old('tipo_voluntariado', $voluntariado->tipo_voluntariado) == 'Educativo' ? 'selected' : '' }}>Educativo</option>
            <option value="Ambiental" {{ old('tipo_voluntariado', $voluntariado->tipo_voluntariado) == 'Ambiental' ? 'selected' : '' }}>Ambiental</option>
            <option value="Social" {{ old('tipo_voluntariado', $voluntariado->tipo_voluntariado) == 'Social' ? 'selected' : '' }}>Social</option>
            <option value="Salud" {{ old('tipo_voluntariado', $voluntariado->tipo_voluntariado) == 'Salud' ? 'selected' : '' }}>Salud</option>
            <option value="Cultural" {{ old('tipo_voluntariado', $voluntariado->tipo_voluntariado) == 'Cultural' ? 'selected' : '' }}>Cultural</option>
        </select>
    </div>

    {{-- Mensaje --}}
    <div class="mb-4">
        <label class="fw-semibold mb-2">Mensaje</label>
        <textarea name="mensaje" class="form-control" rows="4">{{ old('mensaje', $voluntariado->mensaje) }}</textarea>
    </div>

    {{-- Botones --}}
    <div class="d-flex gap-2 mt-4">
        <a href="{{ route('voluntariado.index') }}" class="btn btn-outline-secondary">
            ← Volver
        </a>
        <button type="submit" class="btn btn-primary">
            Guardar Cambios
        </button>
    </div>
</form>

            </div>

            <div class="card-footer text-center text-muted">
                <small>Ce Yolo Kalli</small>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>