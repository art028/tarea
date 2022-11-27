@extends('plantilla')

@section('contenido')

@if (Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    Libro Actualizado :  
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif

@if (Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    Libro Eliminado :  
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif


<h1 class="display-1 mt-4 mb-4 text-center"> Libros </h1>

@foreach ($consultarec as $consulta)
<div class="container col-md-6">
   
    <div class="card text-center">
        <div class="card-header">
          <h5 class="text-primary text-center">{{$consulta->fecha}}</h5>
        </div>

        <div class="card-body">
          <h5 class="card-title">{{$consulta->titulo}}</h5>
          <p class="card-text">{{$consulta->recuerdo}}</p>
        </div>

        <div class="card-footer text-muted">
            <a href="{{route('recuerdo.edit',$consulta->idRecuerdo)}}" class="btn btn-warning">Actualizar</a>
            <a href="{{route('recuerdo.eliminar',$consulta->idRecuerdo)}}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
        <br>
</div> 
@endforeach
<br>

@endsection