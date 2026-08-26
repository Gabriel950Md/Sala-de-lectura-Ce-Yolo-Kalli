@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">✏️ Editar Donación</h2>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('donaciones.update', $donacione->id) }}" method="POST">
                @csrf
                @method('PUT') {{-- Para usar el método PUT --}}

                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nombre" class="form-label">Nombre Completo:</label>
                        <input type="text" name="nombre" class="form-control" value="{{ old('nombre', $donacion->nombre) }}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="gmail" class="form-label">Correo Electrónico:</label>
                        <input type="email" name="gmail" class="form-control" value="{{ old('gmail', $donacion->gmail) }}" required>
                    </div>

                    <div class="col-md-2">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $donacion->telefono) }}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="tipo_donacion" class="form-label">Tipo de Donación:</label>
                        <select name="tipo_donacion" class="form-control" required>
                            <option value="Libros" {{ $donacion->tipo_donacion == 'Libros' ? 'selected' : '' }}>📚 Libros</option>
                            <option value="Mobiliario" {{ $donacion->tipo_donacion == 'Mobiliario' ? 'selected' : '' }}>🪑 Mobiliario</option>
                            <option value="Material" {{ $donacion->tipo_donacion == 'Material' ? 'selected' : '' }}>📌 Material Didáctico</option>
                            <option value="Monetaria" {{ $donacion->tipo_donacion == 'Monetaria' ? 'selected' : '' }}>💰 Donación Monetaria</option>
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Actualizar Donación</button>
                    <a href="{{ route('donadores') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
