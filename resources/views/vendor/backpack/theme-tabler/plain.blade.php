<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body id="app" class=" landing_page" bp-layout="plain">

    <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top white" style="background-color:#000!important" >
                        <a class="navbar-brand" href="#app">INFO-TURISTICA</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pricing-component">Reserva ya</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#faq">Preguntas Frecuentes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://wa.me/+50661708285?text=hola,%20nos%20interesa%20realizar%20una%20renta%20de%20un%20vehiculo">Contactanos!</a>
                                </li>
                            </ul>
                        </div>
                    </nav>




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
