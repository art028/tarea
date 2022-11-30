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
    Libro Eliminado   
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif


<h1 class="display-1 mt-4 mb-4 text-center"> Libros </h1>

@foreach ($consultarlib as $consulta)
<div class="container col-md-6">
   
    <div class="card text-center">
        <div class="card-header">
          <h5 class="text-primary text-center">Datos del Libro</h5>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ISBN</th>
              <th scope="col">Titulo</th>
              <th scope="col">Autor</th>
              <th scope="col">Paginas</th>
              <th scope="col">Editorial</th>
              <th scope="col">Correo</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{$consulta->isbn}}</td>
              <td>{{$consulta->titulo}}</td>
              <td>{{$consulta->nombre}}</td>
              <td>{{$consulta->paginas}}</td>
              <td>{{$consulta->editorial}}</td>
              <td>{{$consulta->correo}}</td>
              <td>
                <a href="{{route('libro.edita',$consulta->idLibro)}}"> <img src="\img\editar.png"></a>
              <a href="{{route('libro.elimina',$consulta->idLibro)}}"> <img src="\img\boton-eliminar.png"></a>
              </td>
            </tr>
          </tbody>
        </table>

        <div class="card-footer text-muted">
            
        </div>
      </div>
        <br>
</div> 
@endforeach
<br>

@endsection