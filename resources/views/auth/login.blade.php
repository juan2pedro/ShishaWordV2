@extension('app')
@section('content')

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- index CSS -->
    <link href="{{ secure_asset('public/css/index.css') }}" rel="stylesheet">
    <!-- Bootstrap  y Popper js  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Links del snippet ---------->
    <script src="{{ secure_asset('public/js/login.js') }}"></script>
    <title>Shisha world!</title>
    <link rel="icon" type="image/x-icon" href="../media/favicon.ico">

</head>


<body>
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
    <div class="container">
        <div class="frame">
            <div class="nav">
                <ul class="links">
                    <li class="signin-active"><a class="btn">Iniciar Sesión</a></li>
                    <li class="signup-inactive"><a class="btn">Registrarse</a></li>
                </ul>
            </div>
            <div ng-app ng-init="checked = false">
                <form class="form-signin" method="POST" name="form" action="{{ route('login') }}">
                    @csrf
                    <label for="email">Usuario</label>
                    <input id="emaill" class="form-styling" type="email" name="email" placeholder="" value="{{ old('email') }}" required autocomplete="email" autofocus /> 
                    
                    <label for="password">Contraseña</label>
                    <input id="passwordL" class="form-styling" type="password" name="password" placeholder="" value="" required autocomplete="current-password" /> <input type="checkbox" id="checkbox" />
                    <button class="btn-animate btn-signin" type="submit">Entrar</button>
                </form>
                <form class="form-signup" method="POST" action="{{ route('register') }}">
                    @csrf
                    <label for="name">Nombre de Usuario</label>
                    <input class="form-styling" type="text" id="name" name="name" placeholder="" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    <label for="email">Email</label>
                    <input class="form-styling" type="email" name="email" placeholder="" id="email" value="{{ old('email') }}" required autocomplete="email"/>
                    <label for="password">Contraseña</label>
                    <input class="form-styling" type="password" name="password" placeholder="" id="password" required autocomplete="new-password"/>
                    <label for="confirmpassword">Confirmar contraseña</label>
                    <input class="form-styling" type="password" name="password_confirmation" placeholder="" id="password-confirm"  name="password_confirmation" required autocomplete="new-password"/>
                    <button class="btn-animate btn-signin" type="submit" >Registrarse</button>

                </form>

            </div>
            <div class="forgot"> <a href="#">¿Has olvidado tu contraseña?</a> </div>
</body>

</html>