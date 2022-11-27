@extends('plantilla')

@section('contenido')

@if (Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    Libro Actualizado :  
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif

@if (Session::has('eliminado'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    Libro Eliminado :  
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif


<h1 class="display-1 mt-4 mb-4 text-center"> Autores </h1>

@foreach ($consultarautor as $consulta)
<div class="container col-md-6">
   
    <div class="card text-center">
        <div class="card-header">
          <h5 class="text-primary text-center"> Datos </h5>
        </div>

        <div class="card-body">
          <h6 class="card-title">Nombre del Autor:</h6>
          <p class="text-decoration-underline">{{$consulta->nombre}}</p>
          <h6 class="card-text">Fecha de Nacimiento:</h6>
          <p class="text-decoration-underline">{{$consulta->fecha}}</p>
          <h6 class="card-text">Libros Publicados:</h6>
          <p class="text-decoration-underline">{{$consulta->libros}}</p>
        </div>

        <div class="card-footer text-muted">
            <a href="{{route('autor.edita',$consulta->idAutor)}}" class="btn btn-outline-warning">Actualizar</a>
            <a href="{{route('autor.consulta',$consulta->idAutor)}}" class="btn btn-outline-danger">Eliminar</a>
        </div>
      </div>
        <br>
</div> 
@endforeach
<br>

@endsection