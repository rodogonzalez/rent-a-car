<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))
</head>

<body id="app" class="{{ backpack_theme_config('classes.body') }}" bp-layout="plain">
    <header class="m-0">
        <div id="logo">
            <span class="logo-yellow">Info</span>
            <span class="logo-white">TURISTICA</span>

        </div>
        <nav>
            <ul>
                <li><a href="#pricing-component">Calcula tu presupuesto</a></li>

                <li><a href="#faq">Preguntas Frecuentes</a></li>
            </ul>
        </nav>
    </header>


    <div class="page m-0">
        <div class="page-wrapper m-0">

            <div class="page-body m-0">
                <main>

                    @yield('before_breadcrumbs_widgets')
                    @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))
                    @yield('after_breadcrumbs_widgets')

                    <div class=" animated fadeIn">
                        @yield('before_content_widgets')
                        @yield('content')
                        @yield('after_content_widgets')
                    </div>
                </main>
            </div>

        </div>
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
