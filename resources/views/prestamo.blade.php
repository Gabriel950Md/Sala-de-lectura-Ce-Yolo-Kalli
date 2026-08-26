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
        
        .hero-section-loan {
            background: linear-gradient(rgba(139, 69, 19, 0.8), rgba(139, 69, 19, 0.8)), 
                        url('https://images.unsplash.com/photo-1481627834876-b7833e8f5570?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
            margin-bottom: 50px;
            border-radius: 0 0 20px 20px;
        }
        
        .logo-container-loan {
    width:150px;
    height:140px;
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

        .logo-container-loan img{
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
            width: 80px;
            height: 2px;
            background-color: var(--accent-color);
        }
        
        .card-custom {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background-color: white;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .card-header-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 20px;
            border-bottom: none;
        }
        
        .btn-custom {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 25px;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-custom:hover {
            background-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            color: white;
        }
        
        .btn-outline-custom {
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 30px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin: 0 5px;
        }
        
        .btn-outline-custom:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .form-custom {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .form-control {
            border: 2px solid var(--secondary-color);
            border-radius: 8px;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(139, 69, 19, 0.25);
        }
        
        .quote-section {
            background-color: var(--secondary-color);
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
            text-align: center;
            font-style: italic;
            position: relative;
        }
        
        .quote-section:before {
            content: """;
            font-size: 60px;
            color: var(--primary-color);
            opacity: 0.3;
            position: absolute;
            top: -10px;
            left: 20px;
            font-family: Georgia, serif;
        }
        
        .table-custom {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .table-custom thead {
            background-color: var(--primary-color);
            color: white;
        }
        
        .search-box {
            max-width: 400px;
            margin: 0 auto 20px;
        }

        .buscador-btn{
    padding: 6px 14px;
    font-size: 14px;
    border-radius: 8px;
    height: 47px;
}
        
        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .loan-types {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            margin: 30px 0;
        }
        
        .loan-type-card {
            text-align: center;
            padding: 20px;
            border: 2px solid var(--secondary-color);
            border-radius: 10px;
            margin: 10px 0;
            transition: all 0.3s ease;
        }
        
        .loan-type-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <section class="hero-section-loan animate-fade-in">
        <div class="container">
            <div class="logo-container-loan">
                <img src="{{ asset('img/yolo.jpeg') }}" 
                     class="img-fluid rounded-circle" alt="Ce Yolo Kalli">
            </div>
            <h1 class="display-4 fw-bold">Préstamo de Libros</h1>
            <p class="lead fs-4">Lleva la lectura a donde vayas</p>
        </div>
    </section>

    <div class="container">
        <section class="text-center my-4">
            <div class="btn-group-lg" role="group">
                <a href="{{route('donaciones')}}" class="btn btn-outline-custom btn-lg me-2">Donaciones</a>
                <a href="{{route('prestamo')}}" class="btn btn-custom btn-lg me-2">Préstamo de Libros</a>
                <a href="{{route('ubicaciones')}}" class="btn btn-outline-custom btn-lg">Ubicaciones</a>
            </div>
        </section>

        <section class="my-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="quote-section">
                        <p class="fs-4 mb-0">"La lectura es el alimento de la imaginación, el motor de la creatividad"</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <h2 class="section-title text-center">Tipos de Préstamo</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="loan-type-card">
                        <i class="fas fa-home fa-3x text-primary mb-3"></i>
                        <h4>Préstamo a Casa</h4>
                        <p>Para la comunidad educativa de la Secundaria Técnica Agropecuaria #54</p>
                        <ul class="text-start">
                            <li>Hasta 3 ejemplares</li>
                            <li>5 días de préstamo</li>
                            <li>Renovable hasta 3 veces</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="loan-type-card">
                        <i class="fas fa-users fa-3x text-primary mb-3"></i>
                        <h4>Préstamo para Actividades</h4>
                        <p>Para familias, docentes y mediadores lectores</p>
                        <ul class="text-start">
                            <li>Hasta 20 libros</li>
                            <li>Periodo de 1 mes</li>
                            <li>Renovable según necesidad</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

                <section class="my-5" id="buscador-libros">

<h2 class="section-title text-center">Catálogo de Libros Disponibles</h2>

<div class="row mb-4">
<div class="col-md-8 mx-auto">

<form action="{{ route('prestamop') }}#buscador-libros" method="GET" class="search-box">
<div class="input-group">

<input type="text"
name="busqueda"
id="buscadorLibros"
value="{{ $busqueda ?? '' }}"
class="form-control buscador-input"
placeholder="🔎 Buscar libro o autor...">

<button type="submit" class="btn btn-custom buscador-btn">
<i class="fas fa-search"></i> Buscar
</button>

</div>
</form>

<div class="text-center mt-2">
<small id="contadorResultados" class="text-muted"></small>
</div>

</div>
</div>


<style>

.table-custom{
border-radius:12px;
overflow:hidden;
box-shadow:0 8px 25px rgba(0,0,0,0.12);
background:white;
}

.table-custom thead{
background:linear-gradient(45deg,var(--primary-color),var(--accent-color));
color:white;
font-size:15px;
}

.table-custom th{
padding:15px;
letter-spacing:.5px;
}

.table-custom td{
padding:14px;
vertical-align:middle;
transition:all .2s ease;
}

.table-custom tbody tr{
transition:all .25s ease;
}

.table-custom tbody tr:hover{
background:#fff7ef;
transform:scale(1.01);
box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

.table-custom code{
background:#f3e6d7;
padding:4px 8px;
border-radius:6px;
font-size:13px;
color:#6b3d1f;
}

.badge{
padding:6px 10px;
font-size:12px;
border-radius:20px;
}


@media (max-width:768px){

.table-custom thead{
display:none;
}

.table-custom,
.table-custom tbody,
.table-custom tr,
.table-custom td{
display:block;
width:100%;
}

.table-custom tr{
margin-bottom:15px;
background:white;
border-radius:10px;
padding:15px;
box-shadow:0 4px 15px rgba(0,0,0,0.08);
}

.table-custom td{
text-align:right;
padding-left:50%;
position:relative;
border:none;
}

.table-custom td::before{
content:attr(data-label);
position:absolute;
left:15px;
width:45%;
font-weight:bold;
text-align:left;
color:var(--primary-color);
}

}

</style>


<div class="row">
<div class="col-12">

@if($libros->count() == 0)

<div class="text-center py-4">
<i class="fas fa-book fa-3x text-muted mb-3"></i>
<p class="text-muted fs-5">No se encontraron libros.</p>
</div>

@else

<div class="table-responsive">

<div id="contenedorTabla">
@include('partials.tabla-libros')
</div>


</div>

@endif

</div>
</div>

</section>




        <section class="my-5">
            <h2 class="section-title text-center">Solicitar Préstamo</h2>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form-custom">
                        <form action="{{ route('prestamop.send') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo *</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico *</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Número de teléfono *</label>
                                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="libro" class="form-label">Libro a solicitar *</label>
                                        <input type="text" class="form-control" id="libro" name="libro" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <button class="btn btn-custom btn-lg" type="submit">
                                    <i class="fas fa-paper-plane me-2"></i>Solicitar Préstamo
                                </button>
                            </div>
                        </form>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-4 text-center" role="alert">
                                <i class="fas fa-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>




<script>

const buscador=document.getElementById('buscadorLibros');

buscador.addEventListener('keyup',function(){

let texto=this.value;

fetch(`/prestamo?busqueda=${texto}`,{
headers:{
'X-Requested-With':'XMLHttpRequest'
}
})
.then(response=>response.json())
.then(data=>{

document.getElementById('contenedorTabla').innerHTML=data.tabla;

});

});

if(window.location.hash=="#buscador-libros"){
document.querySelector("#buscador-libros")
.scrollIntoView({
behavior:"smooth"
});
}

</script>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>
@endsection