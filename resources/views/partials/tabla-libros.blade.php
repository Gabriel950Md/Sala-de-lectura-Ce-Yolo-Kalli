<table class="table table-hover table-custom">

<thead>
<tr>
<th>Nombre</th>
<th>Autor</th>
<th>Estatus</th>
<th>ID Libro</th>
<th>Observación</th>
</tr>
</thead>

<tbody>

@foreach($libros as $libro)

<tr>

<td>{{ $libro->nombre }}</td>

<td>{{ $libro->autor }}</td>

<td>
<span class="badge {{ $libro->estatus == 'Disponible' ? 'bg-success':'bg-warning' }}">
{{ $libro->estatus }}
</span>
</td>

<td><code>{{ $libro->idLibro }}</code></td>

<td><code>{{ $libro->Observacion }}</code></td>

</tr>

@endforeach

</tbody>

</table>

<div class="d-flex justify-content-center mt-4">
    {{ $libros->appends([
        'busqueda' => $busqueda ?? ''
    ])->fragment('buscador-libros')
      ->links('pagination::bootstrap-5') }}
</div>