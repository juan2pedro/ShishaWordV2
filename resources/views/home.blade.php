@section('content')
<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!--Inter UI font-->
    <link href="{{ asset('public/css/home.css') }}" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
</head>

<body>
    <!--navigation-->
    <section class="smart-scroll">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand heading-black" href="#">
                    Shisha-Word
                </a>
                <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span data-feather="grid"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ route('main.index') }}">Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="https://github.com/juan2pedro/ShishaWordV2#readme">Repositorio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="https://github.com/IESCampanillas/proyectos-daw-2022#readme">Requisitos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="https://iescampanillas.com">IES Campanillas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll d-flex flex-row align-items-center text-primary" href="{{ route('login') }}">
                                <em data-feather="layout" width="18" height="18" class="mr-2"></em>
                                Iniciar sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!--hero header-->
    <section class="py-7 py-md-0 bg-hero" id="home">
        <div class="container">
            <div class="row vh-md-100">
                <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                    <h1 class="heading-black text-capitalize">Shisha-Word</h1>
                    <p class="lead py-3">Pagina desarrollada sobre laravel para el proyecto de fin de curso de
                        desarrollo de aplicaciones webs - IES Campanillas</p>
                    <button class="btn btn-primary d-inline-flex flex-row align-items-center">
                        Iniciar sesión
                        <em class="ml-2" data-feather="arrow-right"></em>
                    </button>
                </div>
            </div>
        </div>
    </section>
    
    <video width="100%" height="30%"  autoplay muted  loop>
     <source src=" {{ asset('public/media/MR. SHISHA™️ ROCKET2.0.mp4') }}" type="video/mp4" >
Your browser does not support the video tag.
</video>
<audio controls autoplay>
  <source src="{{ asset('public/media/Shisha ASMR.mp3') }}" type="audio/mp3">
Your browser does not support the audio element.
</audio>
    <!-- features section -->
    <section class="py-7 bg-dark section-angle top-right bottom-right" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2 class="heading-black">Lenguajes escogidos</h2>
                    <p class="text-muted lead">Una pequeña descripción sobre los lenguajes escogidos</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <div class="row feature-boxes">
                        <div class="col-md-6 box">
                            <div class="icon-box box-primary">
                                <div class="icon-box-inner">
                                    <span data-feather="edit-3" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>PHP</h5>
                            <p class="text-muted">Backend desarrollado sobre php</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-success">
                                <div class="icon-box-inner">
                                    <span data-feather="monitor" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>JS</h5>
                            <p class="text-muted">Para el front</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-danger">
                                <div class="icon-box-inner">
                                    <span data-feather="layout" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Laravel</h5>
                            <p class="text-muted">Para mayor comodidad</p>
                        </div>
                        <div class="col-md-6 box">
                            <div class="icon-box box-info">
                                <div class="icon-box-inner">
                                    <span data-feather="globe" width="35" height="35"></span>
                                </div>
                            </div>
                            <h5>Ayax</h5>
                            <p class="text-muted">animaciones y graficos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--faq section-->
    <section class="py-7" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center">
                    <h2>Preguntas frecuentes</h2>
                    <p class="text-muted lead">Respuestas a las preguntas más comunes.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6 mb-5">
                            <h6>Lenguaje del backend</h6>
                            <p class="text-muted">Está desarrollado en PHP 8.* junto con el framerwork laravel</p>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h6>Do you have hidden fees?</h6>
                            <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper
                                per tem por legere me doming.</p>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h6>What are the payment methods you accept?</h6>
                            <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper
                                per tem por legere me doming.</p>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h6>How often do you release updates?</h6>
                            <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper
                                per tem por legere me doming.</p>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h6>What is your refund policy?</h6>
                            <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper
                                per tem por legere me doming.</p>
                        </div>
                        <div class="col-md-6 mb-5">
                            <h6>How can I contact you?</h6>
                            <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imper
                                per tem por legere me doming.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--footer-->
    <footer class="py-6">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 mr-auto">
                    <h5>Sobre mí</h5>
                    <p class="text-muted">Desarrollador de aplicaciónes webs en el<br> IES Campanillas</p>
                </div>
            <div class="row mt-5">
                <div class="col-12 text-muted text-center small-xl">
                    &copy; 2022 Juan Pedro Mancera Taboada - All Rights Reserved
                </div>
            </div>
        </div>
    </footer>

    <!--scroll to top-->
    <div class="scroll-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('public/js/home.js') }}"></script>
</body>
</html>

