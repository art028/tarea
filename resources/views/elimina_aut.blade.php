@extends('plantilla')

@section('contenido')





<h1 class="display-1 mt-4 mb-4 text-center"> Autores </h1>


<div class="container col-md-6">
   
    <div class="card text-center">
        <div class="card-header">
          <h5 class="text-primary text-center"> Datos </h5>
        </div>

        <div class="card-body">
          <h6 class="card-title">Nombre del Autor:</h6>
          <p class="text-decoration-underline">{{$consultarautor->nombre}}</p>
          <h6 class="card-text">Fecha de Nacimiento:</h6>
          <p class="text-decoration-underline">{{$consultarautor->fecha}}</p>
          <h6 class="card-text">Libros Publicados:</h6>
          <p class="text-decoration-underline">{{$consultarautor->libros}}</p>
        </div>

        <form method="POST" action="{{route('autor.borrar',$consultarautor->idAutor)}}">
          @csrf
          @method('delete')
        <div class="card-footer text-muted">
          <button type="submit" class="btn btn-outline-danger" >Si, eliminalo</button>
            <a href="{{route('autor.consulta')}}" class="btn btn-outline-success">No, regresa</a>
        </div>
      </form>
      </div>
        <br>
</div> 
<br>

@endsection