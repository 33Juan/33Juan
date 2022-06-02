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

     <div class="texto">
     <h3>CONTROL DE PERSONAL</h3><br>
        <h4>¿QUE ES EL CONTROLD DE PERSONAL?</h4>

        <p class="parrafo">El control de personal o control de colaboradores permite integrar una serie de
            procedimientos con la finalidad de registrar y controlar al personal que trabaja
            en una empresa o institución. </p><br>
            Los terminales de control de personal también se denominan terminales de control de presencia, control de asistencia, control horario o relojes de fichar. Estos sistemas tienen definidos para cada usuario registrado, unos calendarios, horarios, vacaciones, turnos de trabajo, etc. en que el usuario registrado tiene permiso.
            <br><br>
            <img src="{{asset('images/gif1.gif')}}" alt="gif" width="50%" height="20%">
            <p>control de personal permite gestionar el saldo horario de cada trabajador, permisos laborales, horas extras, asistencia, control de turnos, activación de sirenas y alarmas horarias así como para gestionar las diferentes incidencias de acceso.
            </p>
            <br>
            <img src="{{asset('images/gif2.png')}}" alt="gif2" width="50%" height="20%">
            <br><br>
            Otra característica común de los terminales de control de personal es la posibilidad de descargar el registro o logs del histórico de accesos, donde hay información de la identidad de cada usuario, el código de incidencia de acceso, la hora del acceso.
            La autenticación de cada usuario puede realizarse mediante tecnología biométrica, proximidad, tarjeta inteligente, banda magnética, código de barras o password.
        </p>
    </div>
        
     <!-- Slide -->
    <br><br><br><br><br>
    <div class="slider">
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
                    <h3>Control de entrada</h3>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/foto2.webp')}}" alt="Second slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>Control de salida</h3>
                </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/foto3.webp')}}" alt="Third slide" height="550" width="400">
                <div class="carousel-caption">
                    <h3>Control del horario</h3>
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
        </div>
@endsection
</body>
</html>
