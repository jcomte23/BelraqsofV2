<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="organization" content="S.O.S Belleza">
    <meta name="designer" content="Servicio Nacional de Aprendizaje (SENA)">
    <meta name="robots" content="index,follow">
    <meta name="revisit-after" content="15days">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="Javier Cómbita Téllez, Sebastián Velásquez, Kevin Orlando Hernández Ruiz,Santiago Garcia Uribe">
    <!--icono de la pagina:https://www.favicon-generator.org/ solo imagenes .png-->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('img/Favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/Favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('img/Favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/Favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/Favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/Favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/Favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/Favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/Favicon//pple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/Favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/Favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('img/Favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/Favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('img/Favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('img/Favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <meta name="descripcion" content="proyecto belraqsoft">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('lib/gritter/css/jquery.gritter.css')}}"/>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" >
    <link rel="stylesheet" href="{{ asset('css/EstilosUniversales.css')}}">
    <link href="{{ asset('css/pagination.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title')</title>
</head>
<body>
        <!--<Barra de navegacion">-->
            <header class="header navegation black-bg sticky-top">
                <div class="row">
                    <div class="col-lg-12 superior">
                        <div class="row">
                            <div class="col-lg-10">
                                <a href="{{ url('/Reportes')}}" class="logo titulo"><b><span>S.O.S</span>Belleza</b></a>
                            </div>
                            <div class="col-lg-2">
                                <div class="top-menu ">
                                    <ul class="nav pull-right top-menu rounded boton_cerrar_session">
                                        <li class="alineacion_boton"><a class="logout" href="{{ url('/')}}">Cerrar sesion</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

        <!--<Barra de lateral">-->
            <aside>
                <div id="sidebar" class="nav-collapse navegation">
                    <ul class="sidebar-menu navegation" id="nav-accordion">
                        <p class="centered"><a href="{{ url('/Reportes')}}" ><img class="logo" src="{{ asset('img/FondoLogo.jpg')}}" width="100"></a>
                        </p>
                        <h5 class="centered titulo">User logeado</h5>
                            <li>
                                <a href="{{ url('/Reportes')}}">
                                    <i class="large material-icons">reorder</i>
                                    <span>Reportes</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Clientes')}}">
                                    <i class="large material-icons">account_box</i>
                                    <span>Clientes</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Usuarios')}}">
                                    <i class="large material-icons">person</i>
                                    <span>Usuarios</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Compras')}}">
                                    <i class="large material-icons">shopping_cart</i>
                                    <span>Compras</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Pedidos')}}">
                                    <i class="large material-icons">add_shopping_cart</i>
                                    <span>Pedidos</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Ventas')}}">
                                    <i class="large material-icons">assignment_turned_in</i>
                                    <span>Ventas</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Proveedores')}}">
                                    <i class="large material-icons">face</i>
                                    <span>Proveedores</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/Existencias')}}">
                                    <i class="large material-icons">reorder</i>
                                    <span>Existencias</span>
                                </a>
                            </li>
                    </ul>
                </div>
            </aside>

        <!-- CUERPO DEL DOCUMENTO-->
        <section id="main-content" class="contenedor">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12 main-chart">
                        @yield('content')
                    </div>
                </div>
            </section>
        </section>

    
        <!-- Footer-->
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
                </p>
                <div class="credits">
    
                    Created with Dashio template by <a href="">TemplateMag</a>
                </div>
            </div>
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/jquery/jquery.min.js"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/bootstrap/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="https://templatemag.com/demo/templates/Dashio/lib/jquery.dcjqaccordion.2.7.js"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/jquery.scrollTo.min.js"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/jquery.sparkline.js"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/common-scripts.js"></script>
        <script type="text/javascript" src="https://templatemag.com/demo/templates/Dashio/lib/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="https://templatemag.com/demo/templates/Dashio/lib/gritter-conf.js"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/sparkline-chart.js"></script>
        <script src="https://templatemag.com/demo/templates/Dashio/lib/zabuto_calendar.js"></script>
        <script>
            if (window.self == window.top) {
                (function(i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function() {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');
                ga('create', 'UA-55234356-6', 'auto');
                ga('send', 'pageview');
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>