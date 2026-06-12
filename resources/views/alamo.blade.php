@extends(backpack_view('default'))
@section('content')
    <section class="home margin_top" id="home">
        <div class="row w-100 p-0 text-center">
            <div class="col-md-3 p-0 m-0 left animate__animated animate__backInUp no_shown_mobile"></div>
            <div class="col-md-6">

                <h1><span>{{ __('rent-a-car.pura-vida') }} </span> {{ __('rent-a-car.al-volante') }}</h1>
                <p>{{ __('rent-a-car.label1') }}</p>
                <h2>{{ __('rent-a-car.respaldo-alamo') }}</h2>

                <div class="form-container">
                    @include('forms.reservation')
                </div>

            </div>
            <div class="col-md-3 p-0 m-0 right animate__animated animate__backInUp  no_shown_mobile"></div>
        </div>




    </section>

    <section class="ride container margin_top" id="ride">
        <div class="heading">
            <span> </span>
            <h1>{{ __('rent-a-car.Como funciona') }} </h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class="ri-map-2-line"></i>
                <h2>{{ __('rent-a-car.select-pick-up-drop-off-location') }}</h2>
                <p>{{ __('rent-a-car.select-pick-up-drop-off-location2') }}</p>
            </div>

            <div class="box">
                <i class="ri-calendar-line"></i>
                <h2>{{ __('rent-a-car.choose-date') }}</h2>
                <p>{{ __('rent-a-car.choose-date-desc') }}</p>
            </div>

            <div class="box">
                <i class="ri-bookmark-line"></i>
                <h2>{{ __('rent-a-car.choose-car') }}</h2>
                <p>{{ __('rent-a-car.choose-car-desc') }}</p>
            </div>
        </div>
    </section>

    <section class="services container margin_top" id="services">
        <div class="heading">
            <span>{{ __('rent-a-car.our-fleet') }}</span>
            <h1>{{ __('rent-a-car.our-fleet-desc') }}</h1>
        </div>
        @include ('sections.carmodels')

    </section>

    <section class="about margin_top" id="about">
        <div class="heading">
            <span>Simplifica tu viaje y ahorra</span>
            <h1>Con el respaldo de Alamo Rent A Car</h1>
            <h2>Líder mundial en alquiler de vehículos</h2>
        </div>
        <div class="about-container">
            <div class="about-img"><img src="https://www.alamocostarica.com/images/Web-alamo-Agencias.jpg"
                    alt="about banner"></div>
            <div class="about-text">
                <span>Beneficios Exclusivos</span>
                <p>
                    Todos los clientes de Infoturistica tendrán acceso a beneficios exclusivos al reservar su vehículo a
                    través de Alamo:
                <ul class="benefits">
                    <li><b>Tarifas Preferenciales Garantizadas:</b> Accede a precios de alquiler de autos que superan las
                        ofertas públicas, asegurándote los mejores valores del mercado.</li>
                    <li><b>Reservas Respaldadas y Simplificadas:</b> Olvídate de las complicaciones. Garantizamos un proceso
                        de reserva fluido y un respaldo directo para todas tus necesidades de transporte.</li>
                    <li><b>Beneficios Adicionales Exclusivos:</b> Disfruta de ventajas únicas, como posibles upgrades de
                        cortesía (sujeto a disponibilidad) o coberturas mejoradas, diseñadas para elevar tu experiencia de
                        viaje.</li>
                    <li><b>Cobertura Global y Flota de Calidad:</b> Reserva con confianza sabiendo que cuentas con el
                        extenso respaldo global de Alamo y su moderna flota de vehículos, lista para llevarte a cualquier
                        destino.</li>

                </ul>
                <small>Esta alianza es un compromiso firme de Infoturistica para mejorar cada aspecto de la experiencia de
                    nuestros usuarios. Al unir fuerzas con Alamo, no solo garantizamos un medio de transporte, sino que
                    aseguramos la mejor tarifa y un servicio de alquiler de auto premium y respaldado a nivel mundial.
                </small>
                <hr>
                <h3>¡Reserva ahora tu vehículo a través de Infoturistica y comienza a disfrutar de las tarifas y beneficios
                    preferenciales que solo esta alianza puede ofrecerte!</h3>

                </p>

            </div>
        </div>
    </section>

    <section class="reviews container margin_top" id="reviews">
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
            <input type="text" placeholder="Ingresa tu email">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>


@endsection