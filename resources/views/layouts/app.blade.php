<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../media/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('public/css/main.css') }}" rel="stylesheet">

</head>

<body>
<header class="cd-header">
        <div class="header-wrapper">
            <div class="logo-wrap">
                <a href="#" class="hover-target"><span>{{ Auth::user()->name }}</span></a>
            </div>
            <div class="nav-but-wrap">
                <div class="menu-icon hover-target">
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>
            </div>
        </div>
    </header>
    

 <div class="nav">
        <div class="nav__content">
            <ul class="nav__list">
                <li class="nav__list-item active-nav"><a href="{{ route('modelos.index') }}" class="hover-target">Home</a></li>
                <li class="nav__list-item"><a href="{{ route('modelos.index') }}" class="hover-target">Modelos</a></li>
                <li class="nav__list-item"><a href="{{ route('modelos.create') }}" class="hover-target">Añadir Modelo</a></li>
                <li class="nav__list-item"><a href="{{ route('sabores.index') }}" class="hover-target">Sabores</a></li>
                <li class="nav__list-item"><a href="{{ route('mezclas.index') }}" class="hover-target">Mezclas</a></li>
                <li class="nav__list-item"><a href="{{ route('materiales.index') }}" class="hover-target">Materiales</a></li>
                <li class="nav__list-item"><a href="{{ route('marcas.index') }}" class="hover-target">Marcas</a></li>
                <li class="nav__list-item"><a href="{{ route('formatos.index') }}" class="hover-target">Formatos</a></li>
                <li class="nav__list-item"><a href="{{ route('empaquetados.index') }}" class="hover-target">Empaquetados</a></li>
                








                <li class="nav__list-item"><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="hover-target">Cerrar sesión</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </ul>
        </div>
    </div>

    <div class="section full-height over-hide">
        <div class="switch-wrap">
            <section>
                <p class="text">
                    shishaword
                </p>
            </section>
            <p>Tenemos la mayor base de datos.</p>
        </div>
    </div>

    <div class='cursor' id="cursor"></div>
    <div class='cursor2' id="cursor2"></div>
    <div class='cursor3' id="cursor3"></div>

    <div class="col-lg-4 col-md-6 mb-2-6  top-buffer my-3">
    </div>
    <section class="content container-fluid">
    @yield('content')
    </div>
    </section>
</body>
</html>
 <script src="{{ asset('public/js/main.js') }}" defer></script>