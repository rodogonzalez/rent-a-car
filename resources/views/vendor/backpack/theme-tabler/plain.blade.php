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

                    <nav>
                        <ul class="top_menu">
                            <li><a href="#pricing-component">Calcula tu presupuesto</a></li>
                            <li><a href="#faq">Preguntas Frecuentes</a></li>
                            <li><a href="https://wa.me/+50661708285?text=hola,%20nos%20interesa%20realizar%20una%20renta%20de%20un%20vehiculo">Contactanos</a></li>
                        </ul>
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
