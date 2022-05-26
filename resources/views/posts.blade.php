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
<body>
@extends('layouts.app')
@section('content')

<!-- Nav Menu -->
<nav class="nav">
    <div class="container">

    <!-- Logo -->
        <div class="logo">
            <img src="{{asset('images/logo.webp')}}" width="63" alt="" loading="lazy">
        </div>
        <div class="main_list" id="mainListDiv">
            <ul>
                <li><a href="http://127.0.0.1:8000/">Home</a></li>
                <li><a href="http://127.0.0.1:8000/login">Login</a></li>
                <li><a href="http://127.0.0.1:8000/register">Register</a></li>
                <li><a href="#">disegn</a></li>
                <li><a href="#">dcontact</a></li>
            </ul>
        </div>
        <div class="media_button">
            <button class="main_media_button" id="mediaButton">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</nav>    

     <!-- Contenido -->
     <section class="container-fluid content">
        <h1>Welcome to Eye Providence!</h1>
     <section class="home"></section>

     <!-- Main -->
        

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
