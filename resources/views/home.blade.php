@extends('template')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #8B4513;
            --secondary-color: #D2B48C;
            --accent-color: #A52A2A;
            --light-color: #F5F5DC;
            --dark-color: #3E2723;
        }
        
        body {
            font-family: 'Georgia', serif;
            background-color: var(--light-color);
            color: var(--dark-color);
            line-height: 1.6;
        }
        
        .hero-section {
            background: linear-gradient(rgba(139, 69, 19, 0.7), rgba(139, 69, 19, 0.7)), 
                        url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 50px;
        }
        
.logo-container{
    width:240px;
    height:220px;
    margin:0 auto 30px;
    border-radius:50%;
    overflow:hidden;
    border:6px solid #D2B48C;
    box-shadow:0 8px 30px rgba(0,0,0,.25);
    background:white;
    display:flex;
    justify-content:center;
    align-items:center;
}

.logo-container img{
    width:92%;
    height:92%;
    object-fit:contain;
    object-position:center;
    border-radius:50%;
}
        
        .section-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 30px;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .card-custom {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            background-color: white;
            overflow: hidden;
        }
        
        .card-custom:hover {
            transform: translateY(-5px);
        }
        
        .card-header-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-bottom: none;
        }
        
        .quote-section {
            background-color: var(--secondary-color);
            padding: 40px 0;
            border-radius: 10px;
            margin: 40px 0;
            position: relative;
        }
        
        .quote-section:before {
            content: """;
            font-size: 120px;
            color: var(--primary-color);
            opacity: 0.2;
            position: absolute;
            top: -20px;
            left: 20px;
            font-family: Georgia, serif;
        }
        
        .mission-section {
            background-color: white;
            padding: 50px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-custom:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .book-decoration {
            position: absolute;
            opacity: 0.1;
            font-size: 120px;
            color: var(--primary-color);
            z-index: 0;
        }
    </style>
</head>
<body>
    <section class="hero-section animate-fade-in">
        <div class="container">
            <div class="logo-container">
                <img src="{{ asset('img/yolo.jpeg') }}" 
                     class="img-fluid rounded-circle" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">Ce Yolo Kalli</h1>
            <p class="lead fs-3">Sala de Lectura</p>
            <p class="fs-5 mt-4">"Una Casa Corazón" - Nombre en náhuatl</p>
        </div>
    </section>

    <div class="container">
        <section class="quote-section text-center my-5 position-relative">
            <i class="book-decoration fas fa-book-open"></i>
            <div class="container">
                <h3 class="mb-4">Una aventura para las infancias en las Altas Montañas</h3>
                <p class="fs-5">Un espacio donde las palabras cobran vida y la imaginación no tiene límites</p>
            </div>
        </section>

        <section class="my-5 position-relative">
            <i class="book-decoration fas fa-book" style="right: 20px; top: 20px;"></i>
            <h2 class="section-title">¿Quiénes somos?</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-custom">
                        <div class="card-body p-4">
                            <p class="fs-5">
                                Un proyecto colectivo, comunitario y autogestivo, que tiene como objetivo 
                                detonar procesos y experiencias libres, gratuitas y significativas en pro 
                                del amor por la lectura, escritura y arte.
                            </p>
                            <p class="fs-5 mt-3">
                                En Ce Yolo Kalli creemos en el poder transformador de las palabras y 
                                en la importancia de crear espacios seguros donde niñas, niños y jóvenes 
                                puedan explorar, crear y soñar a través de los libros.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mission-section my-5 rounded">
            <div class="container">
                <h2 class="section-title text-center">Nuestra Misión</h2>
                <div class="row">
                    <div class="col-md-4 text-center mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-book-reader"></i>
                        </div>
                        <h4>Fomentar la Lectura</h4>
                        <p>Promovemos el hábito de la lectura desde la primera infancia a través de actividades lúdicas y significativas.</p>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <h4>Estimular la Creatividad</h4>
                        <p>Incentivamos la expresión artística y literaria mediante talleres y actividades creativas.</p>
                    </div>
                    <div class="col-md-4 text-center mb-4">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4>Construir Comunidad</h4>
                        <p>Creemos en el poder de lo colectivo para transformar realidades a través de la cultura.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title">Nuestras Actividades</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-header card-header-custom">
                            <h5 class="mb-0"><i class="fas fa-book me-2"></i>Horarios de Lectura</h5>
                        </div>
                        <div class="card-body">
                            <p>Espacios dedicados para la lectura individual y grupal, con una amplia selección de libros para todas las edades.</p>
                            <ul>
                                <li>Lunes a viernes: 3:00 PM - 6:00 PM</li>
                                <li>Sábados: 10:00 AM - 2:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card card-custom h-100">
                        <div class="card-header card-header-custom">
                            <h5 class="mb-0"><i class="fas fa-palette me-2"></i>Talleres Creativos</h5>
                        </div>
                        <div class="card-body">
                            <p>Actividades artísticas y literarias que complementan la experiencia lectora:</p>
                            <ul>
                                <li>Taller de escritura creativa</li>
                                <li>Ilustración de cuentos</li>
                                <li>Teatro de títeres</li>
                                <li>Encuadernación artesanal</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center my-5 py-5">
            <h2 class="mb-4">¿Te gustaría ser parte de nuestra comunidad?</h2>
            <p class="fs-5 mb-4">Visítanos y descubre el maravilloso mundo de los libros</p>
            <a href="{{ route('comoserparte') }}" class="btn btn-custom btn-lg me-3">¿Cómo ser parte?</a>
            <a href="{{ route('blog') }}" class="btn btn-outline-custom btn-lg">¿Qué hacemos?</a>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
@endsection