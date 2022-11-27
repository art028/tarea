@extends('plantilla')

@section('contenido')


<div class="container mt-5 col-md-7 bg-light">
    <h3 class="display-2 text-center mb-5"> Actualizar Autores</h3>
    
    <form method="POST" action="{{route('autor.actualiza',$consultaid1->idAutor)}}">
        @csrf
        {{!!method_field('PUT')!!}}
        
        <label  class="form-label">Nombre Completo: </label>
        <input name="nombre" type="text" class="form-control" value="{{$consultaid1->nombre}}">
            @error('nombre')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
         <br>
         <label  class="form-label">Fecha de Nacimiento </label>
         <input name="fecha" type="text" class="form-control" value="{{$consultaid1->fecha}}">
             @error('fecha')
                 <small><strong style="color: red">{{$message}}</strong></small>
             @enderror
          <br>
          <label  class="form-label">No. Libros Publicados: </label>
          <input name="numero" type="number" class="form-control" value="{{$consultaid1->libros}}">
              @error('numero')
                  <small><strong style="color: red">{{$message}}</strong></small>
              @enderror
           <br>
    
         <button type="submit" class="btn btn-outline-dark">Actualizar</button>
        </form>
    <br>
</div>
<br>

@endsection
