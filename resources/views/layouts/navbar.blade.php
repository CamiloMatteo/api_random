<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    <title>PDAO</title>
</head>
<body style="background: #f9f9f9;">
    <!--Navbar-->
    <header>
        <div class="navbar navbar-dark shadow-sm fixed-top" style="background: blue;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img style="width:80px;" src="img/logos/logo_trust.svg" alt="">
                    </a>
                    <div class="menu-wrapper d-lg-none" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="hamburger-menu"></div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav">
                            <li class="nav-item ml-3">
                                <a class="nav-item nav-link" style="font-size:13px;" href="index.html">Tablero</a>
                            </li>
                            <li class="nav-item ml-3 active">
                                <a class="nav-item nav-link" style="font-size:13px;" href="{{url('directory')}}">Directorio<span class="sr-only">(current)</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-item nav-link" style="font-size:13px;" href="#">Aplicaciones</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-item nav-link" style="font-size:13px;" href="dispositivos_registrados.html">Dispositivos</span></a>
                            </li>
                            <li class="nav-item dropdown ml-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:13px;">Seguridad</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Autenticación</a>
                                    <a class="dropdown-item" href="#">Multifactor</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-item nav-link" style="font-size:13px;" href="#">Reportes</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-item nav-link" style="font-size:13px;" href="#">Ajustes</a>
                            </li>

                            <li class="nav-item ml-3 d-lg-none">
                                <a class="nav-item nav-link" style="font-size:13px; font-weight: bold; color: lightskyblue" href="#">Cerrar Sesión</a>
                            </li>

                            <div class="float-right ml-auto d-none d-lg-block">
                                <a href="#"><i class="fas fa-power-off" style="color: #fff"></i></a>
                            </div>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Container content -->
    <div class="container">
        @yield('content')
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery/jquery.slim.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/js/fontawesome-all.js')}}"></script>

    <script>
        (function() {
            $(".menu-wrapper").on("click", function() {
                $(".hamburger-menu").toggleClass("animate");
            });
        })();
    </script>
    <!-- Optional JavaScript -->
    @yield('scripts')

</body>

</html>
