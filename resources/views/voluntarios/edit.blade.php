<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Voluntariado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center mb-4">✏️ Editar Donación</h2>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">

            <form action="{{ route('voluntariado.update', $voluntariado->id) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="text" name="nombre" class="form-control mb-2"
                       value="{{ old('nombre', $voluntariado->nombre) }}">

                <input type="email" name="gmail" class="form-control mb-2"
                       value="{{ old('gmail', $voluntariado->gmail) }}">

                <input type="text" name="telefono" class="form-control mb-2"
                       value="{{ old('telefono', $voluntariado->telefono) }}">

                <input type="text" name="tipo_voluntariado" class="form-control mb-2"
                       value="{{ old('tipo_voluntariado', $voluntariado->tipo_voluntariado) }}">

                <textarea name="mensaje" class="form-control mb-2">{{ old('mensaje', $voluntariado->mensaje) }}</textarea>

                <button class="btn btn-primary mt-3">Guardar Cambios</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>