@extends('plantilla')

@section('contenido')

@if (Session::has('success'))
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    Libro actualizado: 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
{{Session::get('success')}}
</div>

@endif


<div class="container mt-5 col-md-7 bg-light">
    <h3 class="display-2 text-center mb-5"> Registrar Libro</h3>
    
    <form method="post" action="{{route('libro.actualiza',$consultaid->idLibro)}}">
        @csrf
        
        <label for="exampleInputEmail1" class="form-label">ISBN: </label>
        <input name="isbn" type="text" class="form-control" value="{{$consultaid->isbn}}" placeholder="Solo numeros">
            @error('isbn')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
         <br>
       
        <label for="exampleInputPassword1" class="form-label">Titulo: </label>
        <input name="titulo" type="text" class="form-control" value="{{$consultaid->titulo}}">
            @error('titulo')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
            <br>
            <label for="text" class="form-label">Autor: </label>
            <select name="autor" class="form-control">
                <option selected>Selecciona el Autor</option> 
                @foreach ($autores as $tb_autores)
                    <option value="{{$tb_autores['idAutor']}}">{{$tb_autores['nombre']}}</option>
                @endforeach    
            </select>       
                @error('autor')
                    <small><strong style="color: red">{{$message}}</strong></small>
                @enderror
        <br>
        <label for="exampleInputEmail1" class="form-label">Paginas: </label>
        <input name="pagina" type="text" class="form-control" value="{{$consultaid->paginas}}" placeholder="Solo numeros">
            @error('pagina')
                <small><strong style="color: red">{{$message}}</strong></small>
            @enderror
         <br>
         <label for="exampleInputEmail1" class="form-label">Editorial: </label>
         <input name="editorial" type="text" class="form-control" value="{{$consultaid->editorial}}">
             @error('editorial')
                 <small><strong style="color: red">{{$message}}</strong></small>
             @enderror
          <br>
          <label for="exampleInputEmail1" class="form-label">Email de Editorial: </label>
          <input name="email" type="email" class="form-control" value="{{$consultaid->correo}}" placeholder="Solo dirección email">
              @error('email')
                  <small><strong style="color: red">{{$message}}</strong></small>
              @enderror
           <br>                   
        <br>
        <button type="submit" class="btn btn-outline-dark">Registrar</button>
    </form>
    <br>
</div>
<br>

@endsection
