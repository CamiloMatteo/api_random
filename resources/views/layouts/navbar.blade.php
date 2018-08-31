<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Demo Banco</title>
    <meta name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/trust.css')}}">
    @yield('css')
</head>

<body>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-1 shadow-sm">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><img class="logo-banco" src="{{asset('img/logos/logo_banco_pacifico.svg')}}" alt=""></a>
          <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Buscar">
          <ul class=" navbar-nav px-3">
            <li class="nav-item text-nowrap">
              <a class="nav-link" href="#">Cerrar Sesión</a>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="far fa-home mr-2"></i>
                                    <span data-feather="home"></span>Inicio<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('directory')}}">
                                    <i class="far fa-address-book mr-2"></i><span data-feather="file"></span>Directorio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="far fa-cog mr-2"></i><span data-feather="users"></span>Ajustes
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Container content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @yield('content')
        <!-- Alert trigger -->
        <div id="alert-success" class="alert alert-primary alert-top shadow" role="alert"></div>
    </main>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Optional JavaScript -->
    @yield('scripts')
</body>

</html>
