<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<script>
    
</script>
<body>
@extends('layouts.app')
@section('content')

     <!-- Contenido -->
     <div class="bg-6">
        <div class="glitch" data-text="EyeProvidence">EyeProvidence</div>
    </div>

     <section class="container-fluid content">

     <div class="texto1">
        <h1 class="texto2">GuÍa de uso</h1>
        <p class="texto3">Para poder fichar debe clicar en el botón que dice 'ENTRAR' justo debajo de este recuadro. Seguidamente se le redireccionará a la página de fichajes donde se almacenará la hora de entrada, DEBAJO de la tabla hay un enlace que dice 'ACTUALIZAR SALIDA' le clicas y te lleva a una vista donde hay un botón que dice 'SALIR' le clicas y ya estaría todo hecho.</p>
    </div>

      <!-- Boton entrar a fichar -->

      <form action="{{route('checking.store')}}" method="POST">
        @csrf
        <div class="botonEntrar">
            <input type="hidden" name="id" value="{{ Auth::id()}}">
            <br>
            <input type="hidden" name="name" value="{{ Auth::user()->name}}" placeholder="{{ Auth::user()->name}}">
            <br>
            <button type="submit" class="btn btn-primary">Entrar</button><br>
        </div>
    </form>

             <!-- Slide -->
             <br>
        <div id="myCarousel" class="carousel slide bg-inverse w-50 ms-auto me-auto" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/foto4.webp')}}" alt="First slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>First slide</h3>
                    <p>Control de entrada.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/foto2.webp')}}" alt="Second slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>Second slide</h3>
                    <p>Control de salida.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/foto3.webp')}}" alt="Third slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>Third slide</h3>
                    <p>Control del horario.</p>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
@endsection
</body>
</html>
