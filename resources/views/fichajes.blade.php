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

     <ul>
            @foreach ($usuarios as $item)
                <li>{{$item->id}},{{$item->name}}</li>
            @endforeach
        </ul>

   

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

    

     <!-- Footer -->
     <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo.webp')}}" alt="EyeProvidence logo" width="75" id="logofooter">
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/33juannn">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                </a>
                <a href="https://www.instagram.com/33juannn">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                </a>
                <a href="https://www.youtube.com/channel/UCu72tA3eehJ7TNTPFpEGOcw">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
                </a>
                <p class="mt-3">Copyright © 2020 Juan Vázquez, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
@endsection
</body>
</html>
