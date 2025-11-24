<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ backpack_theme_config('html_direction') }}">

<head>
    @include(backpack_view('inc.head'))

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">        
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="https://i.postimg.cc/gcZdykyW/jeep.png">
    <script src="https://unpkg.com/scrollreveal"></script>


    <meta property="og:title" content="Renta de Vehiculos con Precio Preferencial" />
    <meta property="og:image" content="https://www.infoturistica.net/images/thumb.jpg" />
    <meta property="og:description" content="Renta tu Auto en Costa Rica al Mejor Precio y con Súper Beneficios." />



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8MHG3Q37WW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-8MHG3Q37WW');
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17701416634">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-17701416634');
    </script>
    <script>

  function set_car(param_car) {


        const selectElement = document.getElementById('select-car');
        const inputName = document.getElementById('customer_name');
        selectElement.value = param_car;
        inputName.focus();



    }



    </script>
</head>

<body id="app" class=" landing_page animate__animated" bp-layout="plain">

    <header>
        <a href="#" class="logo"><img src="https://i.postimg.cc/gcZdykyW/jeep.png" alt="car logo"></a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <ul class="navbar">
            <li><a href="#home">Inicio</a></li>
            <li><a href="#ride">Como funciona?</a></li>
            <li><a href="#services">Vehiculos</a></li>
            <li><a href="#about">Benerifios</a></li>
            <li><a href="#reviews">Reviews</a></li>




            
        </ul>

        
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
