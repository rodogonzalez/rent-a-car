@extends(backpack_view('plain'))


@section('content')
<script>
    function set_car(param_car) {


        const selectElement = document.getElementById('select-car');
        const inputName = document.getElementById('customer_name');
        selectElement.value = param_car;
        inputName.focus();



    }



    document.addEventListener('DOMContentLoaded', () => {
        const elementsToAnimate = document.querySelectorAll('.my-element');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const animationClass =   element.dataset.animationClass;

                    //element.classList.add("animate__fadeIn");
                    element.classList.add(animationClass);
                    observer.unobserve(element); // Stop observing after the first animation
                }
            });
        }, {
            threshold: 0.01
        }); // Trigger when 50% of the element is visible

        elementsToAnimate.forEach(element => {
            observer.observe(element);
        });
    });
</script>
<style>
.xmy-element{

  opacity: 0;
}
.xmy-element-displayed{

    opacity: 1!important;
}

</style>
<div id="hero">
    <div id="hero-img">
        <div class="container text-center">
            <h1 class="white mb-4  animate__animated animate__backInDown" data-animation-class=" ">Pura Vida al Volante</h1>
            <h2 class="white  animate__animated animate__bounceInLeft" data-animation-class=" ">Renta tu Auto en Costa Rica al Mejor Precio y con Súper Beneficios</h2>

            <a href="#pricing-component" class="btn-contacto my-element animate__animated   mt-4" data-animation-class="animate__fadeIn">Comienza tu Reserva</a>

            <div class="mt-4 white benefit_description">
                <ul>
                    <li class=" animate__animated animate__lightSpeedInRight">1 conductor adicional sin costo</li>
                    <li class=" animate__animated animate__lightSpeedInLeft">Tarifas Preferenciales</li>
                    <li class=" animate__animated animate__lightSpeedInRight">Kilometraje Ilimitado</li>
                    <li class=" animate__animated animate__lightSpeedInLeft">Servicio Emergencia 24 horas</li>
                    <li class=" animate__animated animate__lightSpeedInRight">Amplia Red de Oficinas</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="car-cards" class="row ">
        @php
        $count = 0;
        @endphp
        @foreach ($vehicles as $type)
        <div class="col-12 col-lg-4  p-4 m-0 my-element animate__animated"
        @if ($count % 2 == 0)
            data-animation-class="animate__backInLeft"
        @else
            data-animation-class="animate__backInRight"
        @endif
        >
            <div class="card p-4  ">
                <h3>{{$type->name}}</h3>
                <div class="car-card-img car-card-2" style="background: url(/images/{{ $type->code  }}.png) no-repeat right;"></div>
                <p>Precio desde ${{$type->price}}</p>
                <small>** No incluye impuestos ni seguros</small>
                <a href="#pricing-component" class="btn-contacto" onclick="set_car('{{$type->code}}')">Reservar</a>
            </div>

        </div>
        @php
        $count++;
        @endphp
        @endforeach
    </div>
</div>
<div id="pricing-component" class="my-element animate__animated" data-animation-class="animate__fadeIn">
    <form action="{{route('reservation.request')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <h2>RESERVA AHORA</h2>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3  col-lg-2">Nombre Completo:</div>
                <div class="col-12 col-md-7">
                    <input id="customer_name" type="textfield" name="customer_name" class="w-100" placeholder="Ingrese el nombre de quien haria la reserva" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3 col-lg-2">Telefono:</div>
                <div class="col-12 col-md-7">
                    <input type="text-field" id="customer_phone" name="customer_phone" class="w-100" placeholder="Ingrese su número de teléfono" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3  col-lg-2">Correo Electronico:</div>
                <div class="col-12 col-md-7">
                    <input type="text-field" class="w-100" name="customer_email" id="customer_email" placeholder="Ingrese su correo electrónico" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12 mb-4 ">
                    Elige el modelo:
                    <select id="select-car" name="tipo_vehiculo" required class="w-100">
                        <option disabled selected>Elige uno</option>
                        @foreach ($vehicles as $vehicle)
                        <option value="{{$vehicle->code}}">{{$vehicle->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 mb-4 ">
                    Seguro:
                    <select id="seguro_tipo" name="seguro_tipo" required class="w-100">


                        <option value="BASICO">Basico</option>
                        <option value="FULL">Full</option>


                    </select>
                </div>
                <div class="col-12  col-lg-8">
                    <div class="row">
                        <div class="col-12 ">
                            <div class="row">
                                <div class="col-12 col-md-6 p-4">
                                    <div class="row">
                                        Oficina de Entrega:
                                        <select name="sucursal_retiro" id="sel_est_origen" class="fmt_001">
                                            @foreach ($offices as $office)
                                            <option value="{{$office->code}}">{{$office->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        Fecha de Entrega:
                                        <input id="date_time_pickup" name="date_time_pickup" class=" datepicker" required
                                            data-default-date="{{  date('m/d/Y', strtotime('tomorrow')) }} 11:00am"
                                            data-date-format="m/d/Y G:iK" data-enable-time="true">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 p-4">
                                    <div class="row ">
                                        Oficina de Entrega:
                                        <select name="sucursal_devolucion" id="sel_est_return" class="fmt_001">
                                            @foreach ($offices as $office)
                                            <option value="{{$office->code}}">{{$office->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row ">
                                        Fecha de Devolucion:
                                        <input id="date_time_return" name="date_time_return" class=" datepicker" required
                                            data-date-format="m/d/Y G:iK"
                                            data-default-date="{{  date('m/d/Y', strtotime('+3 days')) }} 11:00am"
                                            data-enable-time="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn-contacto" value="Solicitar Reserva">
    </form>
</div>
<h2>Las opiniones de nuestros clientes</h2>
<div class="container p-4">

    <div class="testimonial one my-element animate__animated" data-animation-class="animate__bounceInLeft">
        <h3>Luis</h3>
        <span>★★★★★</span>
        <p>¡Impecable! Alquilar la minivan fue un acierto total para nuestras vacaciones familiares. El espacio extra para las sillas de los niños y todo el equipaje hizo que el viaje fuera cómodo y sin estrés. El vehículo estaba en perfectas condiciones y el servicio de atención fue rápido y muy amable. ¡Definitivamente la mejor opción para viajar con pequeños</p>
    </div>
    <div class="testimonial two my-element animate__animated" data-animation-class="animate__bounceInLeft">
        <h3>Marcos</h3>
        <span>★★★★★</span>
        <p>Absolutamente fantástica experiencia. Elegimos un modelo convertible para nuestra escapada romántica y superó nuestras expectativas. El coche era elegante, limpio y muy divertido de conducir. Recogerlo y devolverlo fue rapidísimo. Una manera perfecta de añadir ese toque de libertad y lujo a nuestro viaje de luna de miel</p>
    </div>
    <div class="testimonial three my-element animate__animated" data-animation-class="animate__bounceInLeft">
        <h3>Lucía</h3>
        <span>★★★★✰</span>
        <p>Como viajero solo, buscaba algo económico pero confiable, y este servicio me dio justo eso. Alquilé un coche compacto que era eficiente en gasolina y muy fácil de aparcar en la ciudad. El proceso de reserva en línea fue sencillo y transparente, sin sorpresas en el precio. Totalmente recomendado para moverse con total autonomía.</p>
    </div>
    <div class="testimonial four my-element animate__animated" data-animation-class="animate__bounceInLeft">
        <h3>Carmen</h3>
        <span>★★★★★</span>
        <p>Para mis viajes de negocios, la confiabilidad y el tiempo son críticos. La renta del sedán ejecutivo fue una experiencia de primer nivel: el vehículo, en impecable estado, proyectaba la imagen profesional que necesito. Lo más destacable fue la rapidez y eficiencia en la recogida y entrega; estuve en la carretera en minutos, sin demoras innecesarias.</p>
    </div>
</div>

<div id="faq">
    <h2>Preguntas fecuentes</h2>

    <button class="accordion my-element animate__animated" data-animation-class="animate__bounceInLeft">¿Cuales son los requisitos para alquilar un vehiculo?</button>
    <div class="panel">
        El cliente debe cumplir con los siguientes requisitos para poder alquilar:
        <ul class="text-left">
            <li>&#x2714; Edad mínima 21 años.</li>
            <li>&#x2714; Cédula de identidad o pasaporte valido.</li>
            <li>&#x2714; Licencia de conducir al día.</li>
            <li>&#x2714; Tarjeta de Crédito para el depósito respectivo.</li>
            <li>&#x2714; Under age fee de 21 a 25 años $ 10.00 por día.</li>


            <li>&#x2714; Costo de la cobertura para terceros cuando el cliente utiliza el de su tarjeta de crédito $10.00
                por
                día.</li>
            <li>&#x2714; Clientes nacionales deben presentar su cédula de identidad. Adicionalmente para las categorías
                de Standard SUV en adelante, deben presentar como mínimo 2 tarjetas de crédito, una de las
                cuales debe ser black ó infinite. Esto aplica para todos los conductores del contrato. Los clientes
                costarricenses pueden optar por la Cobertura Total a partir de su cuarta renta.</li>
            <li>&#x2714; El depósito requerido para el alquiler del vehículo es por un monto de US $500.00</li>

        </ul>








    </div>

    <button class="accordion my-element animate__animated" data-animation-class="animate__bounceInLeft">¿Puede devolver el vehiculo en una sucursal diferente de donde lo recibi?</button>
    <div class="panel">
        La entrega y devolución gratuita están disponibles en las oficinas y dentro de un radio de
        20 km de las oficinas que ofrecen servicios de entrega externa para alquileres de 2 días
        o más, entre las 9:00 a.m. y las 4:00 p.m. Para entregas y devoluciones fuera de la
        oficina, es necesario verificar la disponibilidad del servicio, ya que está sujeto a
        coordinación con el área de Operaciones. A partir del 16 de diciembre de 2025, el radio
        se reducirá de 20 km a 15 km.
        Cobro de $50,00 + iva aplica para entregas y devoluciones en diferentes cuando la renta
        es menor de 3 días. Este cargo no aplica cuando las rentas son entre oficinas del GAM. Si la renta es de
        mas de 3 dias no tiene cargo adicional.

    </div>

    <button class="accordion my-element animate__animated" data-animation-class="animate__bounceInLeft">¿Están permitidas las mascotas?</button>
    <div class="panel">
        Se admiten mascotas en los vehículos de alquiler de Alamo. Los clientes deben mantener a las mascotas en jaulas y devolver el auto de alquiler limpio y sin pelo de animal para evitar las tarifas de limpieza o arreglos. Los clientes con discapacidades pueden llevar animales de servicio en el vehículo, sin enjaular.
    </div>

</div>


@endsection
