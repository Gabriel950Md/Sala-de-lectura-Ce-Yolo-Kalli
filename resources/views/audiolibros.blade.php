@extends('template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container py-4">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-5 fw-bold" style="color: var(--primary-color);">
                <i class="fas fa-headphones me-2"></i>Catálogo de Audiolibros
            </h1>
            <p class="lead text-muted">
                Escucha nuestras lecturas disponibles en Español y Náhuatl.
            </p>
            <hr style="border-color: var(--secondary-color); width: 100px; margin: 0 auto; border-width: 3px;">
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0" style="background-color: #fff;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-file-audio fa-2x me-3" style="color: var(--accent-color);"></i>
                            <div>
                                <h5 class="card-title mb-0 fw-bold">El Principito</h5>
                                <small class="text-muted">Antoine de Saint-Exupéry</small>
                            </div>
                        </div>
                        <p class="card-text">Una historia poética sobre la infancia, la amistad y el amor.</p>
                    </div>

                    <div class="mt-3">
                        <div class="mb-2">
                            <span class="form-label small fw-bold d-block mb-1">Idioma de audio:</span>
                            <div class="btn-group w-100" role="group">
                                <button type="button" class="btn btn-sm btn-outline-secondary active" 
                                        onclick="cambiarAudio('player1', 'music/el_principito.mp3', this)">
                                    <i class="fas fa-language me-1"></i>Español
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" 
                                        onclick="cambiarAudio('player1', '', this)">
                                    <i class="fas fa-feather-alt me-1"></i>Náhuatl
                                </button>
                            </div>
                        </div>

                        <audio id="player1" controls class="w-100 mt-2">
                            <source src="music/el_principito.mp3" type="audio/mpeg">
                            Tu navegador no soporta el reproductor de audio.
                        </audio>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0" style="background-color: #fff;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-file-audio fa-2x me-3" style="color: var(--accent-color);"></i>
                            <div>
                                <h5 class="card-title mb-0 fw-bold">Cuentos de la Selva</h5>
                                <small class="text-muted">Horacio Quiroga</small>
                            </div>
                        </div>
                        <p class="card-text">Relatos sobre la naturaleza y los animales del monte.</p>
                    </div>

                    <div class="mt-3">
                        <div class="mb-2">
                            <span class="form-label small fw-bold d-block mb-1">Idioma de audio:</span>
                            <div class="btn-group w-100" role="group">
                                <button type="button" class="btn btn-sm btn-outline-secondary active" 
                                        onclick="cambiarAudio('player2', '', this)">
                                    <i class="fas fa-language me-1"></i>Español
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" 
                                        onclick="cambiarAudio('player2', '', this)">
                                    <i class="fas fa-feather-alt me-1"></i>Náhuatl
                                </button>
                            </div>
                        </div>

                        <audio id="player2" controls class="w-100 mt-2">
                            <source src="" type="audio/mpeg">
                            Tu navegador no soporta el reproductor de audio.
                        </audio>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0" style="background-color: #fff;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-file-audio fa-2x me-3" style="color: var(--accent-color);"></i>
                            <div>
                                <h5 class="card-title mb-0 fw-bold">Leyendas Nahuas</h5>
                                <small class="text-muted">Tradición Oral</small>
                            </div>
                        </div>
                        <p class="card-text">Compilación de relatos sobre el origen de las cosas.</p>
                    </div>

                    <div class="mt-3">
                        <div class="mb-2">
                            <span class="form-label small fw-bold d-block mb-1">Idioma de audio:</span>
                            <div class="btn-group w-100" role="group">
                                <button type="button" class="btn btn-sm btn-outline-secondary active" 
                                        onclick="cambiarAudio('player3', '', this)">
                                    <i class="fas fa-language me-1"></i>Español
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" 
                                        onclick="cambiarAudio('player3', '', this)">
                                    <i class="fas fa-feather-alt me-1"></i>Náhuatl
                                </button>
                            </div>
                        </div>

                        <audio id="player3" controls class="w-100 mt-2">
                            <source src="" type="audio/mpeg">
                            Tu navegador no soporta el reproductor de audio.
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function cambiarAudio(playerId, nuevaRuta, boton) {
        const player = document.getElementById(playerId);
        
        player.src = nuevaRuta;
        player.load();
        
        const grupoBotones = boton.parentElement.querySelectorAll('.btn');
        grupoBotones.forEach(btn => btn.classList.remove('active', 'btn-primary'));
        grupoBotones.forEach(btn => btn.classList.add('btn-outline-secondary'));
        
        boton.classList.remove('btn-outline-secondary');
        boton.classList.add('active');
    }
</script>

    
</body>
</html>

@endsection