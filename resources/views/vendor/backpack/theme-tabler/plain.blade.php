<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body id="app" class=" landing_page" bp-layout="plain">

    <header class="container-fluid fixed-top">
        <div class="container">


            <div class="row">
                <div class="col-12 col-md-4">
                    <div id="logo">
                        <a href="#app">
                            <span class="logo-yellow">Info</span>
                            <span class="logo-white">TURISTICA</span>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-8">
<!--
                    <nav>
                        <ul class="top_menu">
                            <li><a href="#pricing-component">Calcula tu presupuesto</a></li>
                            <li><a href="#faq">Preguntas Frecuentes</a></li>
                            <li><a href="https://wa.me/+50661708285?text=hola,%20nos%20interesa%20realizar%20una%20renta%20de%20un%20vehiculo">Contactanos</a></li>
                        </ul>
                    </nav>
!-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
                </div>
            </div>
        </div>



    </header>


    <div class="page animated fadeIn">


        @yield('content')




    </div>

    @yield('before_scripts')
    @stack('before_scripts')

    @include(backpack_view('inc.scripts'))
    @include(backpack_view('inc.theme_scripts'))

    @yield('after_scripts')
    @stack('after_scripts')

    <footer>
        <p>INFOTURISTICA 2025</p>
    </footer>
</body>

</html>
