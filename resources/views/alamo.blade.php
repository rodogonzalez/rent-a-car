@extends(backpack_view('default'))
@section('content')



    <section class="home" id="home">
        <div class="text">
            <h1><span>Pura Vida </span> al Volante</h1>
            <p>Renta tu Auto en Costa Rica al Mejor Precio y con Súper Beneficios!</p>            
            <h2>Con el respaldo de Alamo</h2>
        </div>

        <div class="form-container">
            @include('forms.reservation')
        </div>
    </section>

    <section class="ride container" id="ride">
        <div class="heading">
            <span>How it's works</span>
            <h1>Rent with 3 easy steps</h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class="ri-map-2-line"></i>
                <h2>Choose a Location</h2>
                <p>Browse our wide selection of vehicles according to location</p>
            </div>

            <div class="box">
                <i class="ri-calendar-line"></i>
                <h2>Choose a date</h2>
                <p>Choose a date that fits your needs and budget</p>
            </div>

            <div class="box">
                <i class="ri-bookmark-line"></i>
                <h2>Book a car</h2>
                <p>Enter your details for a quick and secure booking</p>
            </div>
        </div>
    </section>

    <section class="services container" id="services">
        <div class="heading">
            <span>Máximo Respaldo</span>
            <h1>Con el respaldo de Alamo y su moderna flota de vehículos para llevarte a cualquier destino.</h1>
        </div>
        @include ('sections.carmodels')
        
    </section>

    <section class="about" id="about">
        <div class="heading">
            <span>Simplifica tu viaje y ahorra</span>
            <h1>Alianza con Alamo Rent A Car, líder mundial en alquiler de vehículos</h1>
        </div>
        <div class="about-container">
            <div class="about-img"><img src="https://i.postimg.cc/KjtmmbFC/about.png" alt="about banner"></div>
            <div class="about-text">
                <span>Beneficios Exclusivos</span>
                <p>
                Todos los clientes de Infoturistica tendrán acceso a beneficios exclusivos al reservar su vehículo a través de Alamo:

Tarifas Preferenciales Garantizadas: Accede a precios de alquiler de autos que superan las ofertas públicas, asegurándote los mejores valores del mercado.

Reservas Respaldadas y Simplificadas: Olvídate de las complicaciones. Garantizamos un proceso de reserva fluido y un respaldo directo para todas tus necesidades de transporte.

Beneficios Adicionales Exclusivos: Disfruta de ventajas únicas, como posibles upgrades de cortesía (sujeto a disponibilidad) o coberturas mejoradas, diseñadas para elevar tu experiencia de viaje.

Cobertura Global y Flota de Calidad: Reserva con confianza sabiendo que cuentas con el extenso respaldo global de Alamo y su moderna flota de vehículos, lista para llevarte a cualquier destino.

"Esta alianza es un compromiso firme de Infoturistica para mejorar cada aspecto de la experiencia de nuestros usuarios. Al unir fuerzas con Alamo, no solo garantizamos un medio de transporte, sino que aseguramos la mejor tarifa y un servicio de alquiler de auto premium y respaldado a nivel mundial."

¡Reserva ahora tu vehículo a través de Infoturistica y comienza a disfrutar de las tarifas y beneficios preferenciales que solo esta alianza puede ofrecerte!    

                </p>
                
            </div>
        </div>
    </section>

    <section class="reviews container" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Lo que dicen nuestros clientes</h1>
        </div>
        <div class="reviews-container">
            @include ('sections.testimonials')
        </div>
    </section>

    <section class="newsletter">
        <h2>Suscribete a nuestro Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Enter your email">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>
    
    
@endsection