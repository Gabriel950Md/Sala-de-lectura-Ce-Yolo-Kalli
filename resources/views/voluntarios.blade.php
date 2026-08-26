@extends('template')

@section('content')

<figure>
  <blockquote class="blockquote">
    <h3><p class="text-center">CE YOLO KALLI</p></h3>
  </blockquote>
  <figcaption class="blockquote-footer"><h4><p class="text-center">
    Voluntarios </h4><cite title="Source Title"></cite>
    </p></figcaption>
  
</figure> 
<div style="display:flex; justify-content:center;align-items: center;">
<div>

       <div class="btn-group btn-group-lg" role="group" aria-label="large button group">
            <button type="button" class="btn btn-outline-primary"><a a href="{{route('donaciones')}}">Donaciones</a></button>
            <button type="button" class="btn btn-outline-primary"><a a href="{{route('voluntarios')}}">Voluntarios</a></button>
            <button type="button" class="btn btn-outline-primary"><a a href="{{route('prestamo')}}">prestamo de libros</a></button>
             <button type="button" class="btn btn-outline-primary"><a a href="{{route('ubicaciones')}}">ubicaciones</a></button>
        </div>
    </div>
  </div>
<center>
   
<p class=""><small class=""></small></p>
      
        <p class=""> "Se lee para escapar, pero también para encontrar algo que resuene en nuestro interior.  </p>
        <p class="">Tu tiempo y tu amor por los libros pueden ser el primer paso para que otros descubran su propia pasión por la lectura." </p>
<br>
        <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Tipos de voluntarios:</li>
    <li class="list-group-item">Ciudadanos que deseen donar 1 o 2 horas a la semana para compartir lectura </li>
    <li class="list-group-item">Estudiantes a realizar proyectos, servicio social o prácticas profesionales</li>
    <li class="list-group-item">Mediadores lectores que deseen realizar practicas 

</li>
  </ul>
  
</div>
 </div>
</div>

</center>

<br>
<center>
<form class="row g-3">
  <div class="container text-center">
  <div class="row">
    <div class="col-sm-5 col-md-6">Nombre completo
    <div class="col-md-20">
    <input type="text" class="form-control" id="" value="" required>

  </div>
    </div>
    <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">Gmail
    <div class="col-md-20">
    <input type="text" class="form-control " id="" value="" required>
  </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-5 col-lg-6">Numero de Telefono
  <div class="col-md-20">
    <input type="text" class="form-control " id="" value="" required>
  </div></div>
    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">Tipo de Donacion
    <div class="col-md-20">
    <input type="text" class="form-control " id="" value="" required>
  </div>
    </div>
  </div>
</div>

<center>
  <div class="col-md-4">
    <label for="" class="form-label">Colaboración voluntaria </label>
    <input type="text" class="form-control " id="" value="" required>
    <div class="">
      
    </div>
  </div>

  <br>
        <div class="col-md-4">
    <label for="" class="form-label">¿Hay algún aspecto del voluntariado en el que sientas que podrías aportar más, o te gustaría probar algo nuevo?</label>
    <br>
    <label for="" class="form-label">Propuesta:</label>
    <input type="text" class="form-control " id="" value="" required>
    <div class="">
      
    </div>
  </div>
</center>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>

</form>



</center>

@endsection