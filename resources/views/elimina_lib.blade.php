@extends('plantilla')

@section('contenido')


<h1 class="display-1 mt-4 mb-4 text-center"> Libros </h1>

<div class="container col-md-9">
   
    <div class="card text-center">
        <div class="card-header">
          <h5 class="text-primary text-center">Datos del Libro</h5>
        </div>
        <div class="card-body">
          <h6 class="card-title">ISBN: </h6>
          <p class="text-decoration-underline">{{$consultarlibro->isbn}}</p>
          <h6 class="card-text">Titulo:</h6>
          <p class="text-decoration-underline">{{$consultarlibro->titulo}}</p>
          <h6 class="card-text">Autor:</h6>
          <p class="text-decoration-underline">{{$consultarlibro->nombre}}</p>
          <h6 class="card-text">Paginas:</h6>
          <p class="text-decoration-underline">{{$consultarlibro->paginas}}</p>
          <h6 class="card-text">Editorial:</h6>
          <p class="text-decoration-underline">{{$consultarlibro->editorial}}</p>
          <h6 class="card-text">Correo Editorial:</h6>
          <p class="text-decoration-underline">{{$consultarlibro->correo}}</p>
        </div>

        <form method="POST" action="{{route('libro.borrar',$consultarlibro->idLibro)}}">
          @csrf
          @method('delete')
        <div class="card-footer text-muted">
          <button type="submit" class="btn btn-outline-danger" >Si, eliminalo</button>
            <a href="{{route('libro.consulta')}}" class="btn btn-outline-success">No, regresa</a>
        </div>
      </form>
      </div>
        <br>
</div> 
<br>

@endsection