<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Sotano</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-secondary">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" >El Sotano</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{route('prin')}}>Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href={{route('libro.registrar')}}>Registro Libro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href={{route('autor.registrar')}}>Registro Autor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href={{route('libro.consulta')}}>Consulta Libro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href={{route('autor.consulta')}}>Consulta Autor</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    

      @yield('contenido')


      <div class="alert alert-warning text-center" role="alert">
        El Sotano.    CopyRight??      
        @php
            date_default_timezone_set('America/Mexico_City');
            $fetchHora = date('d/m/y h:i:s');
            echo"$fetchHora ";
        @endphp
    </div>
    
    
    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>




</body>
</html>