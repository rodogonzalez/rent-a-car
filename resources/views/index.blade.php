@extends(backpack_view('plain'))


@section('content')


<div id="hero">
    <div id="hero-img">
        <div class="container text-center">
            <h1 class="white mb-4">Pura Vida al Volante</h1><h2> Renta tu Auto en Costa Rica al Mejor Precio y con Súper Beneficios</h2>

            <a href="#pricing-component" class="btn-contacto mt-4"> Calcula ya tu presupuesto</a>

            <div class="mt-4 white benefit_description">
                <ul >
                    <li>Opción de entregar en oficina</li>
                    <li>1 conductor adicional gratis</li>
                    <li>Tarifas Preferencial</li>
                    <li>Kilometraje Ilimitado</li>
                    <li>Servicio Emergencia 24 horas</li>
                    <li>Seguros Adicionales a precio preferencial</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div id="car-cards" class="row ">

        @foreach ($vehicles as $type)
            <div class="col-12 col-lg-4  p-4 m-0 ">
            <div class="card p-4  ">
                <h3>{{$type->name}}</h3>
                <div class="car-card-img car-card-2"></div>
                <p>Precio desde ${{$type->price}}</p>
                <small>** No incluye impuestos ni seguros</small>

            </div>

        </div>
        @endforeach





    </div>
</div>
<div id="pricing-component">


    <h1>¡Cotiza sin compromiso tu reserva!</h1>
    <h2>Calcula tu presupuesto</h2>

    <div class="container  ">
        <div class="row">
            <div class="col-12 col-md-3  col-lg-2">Nombre Completo:</div>
            <div class="col-12 col-md-7"><input type="textfield" class="w-100"
                    placeholder="Ingrese el nombre de quien haria la reserva">
            </div>

        </div>
        <div class="row">
            <div class="col-12 col-md-3 col-lg-2">Telefono:</div>
            <div class="col-12 col-md-7"><input type="text-field" class="w-100"
                    placeholder="Ingrese su numero de telefono"></div>

        </div>
        <div class="row">
            <div class="col-12 col-md-3  col-lg-2">Correo Electronico:</div>
            <div class="col-12 col-md-7"><input type="text-field" class="w-100"
                    placeholder="Ingrese su correo electronico"></div>

        </div>

        <div class="row mt-4">
            <div class="col-12 mb-4 ">
                Elige el modelo:
                <select id="select-car">
                    <option disabled>Elige uno</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{$vehicle->code}}">{{$vehicle->name}}</option>
                    @endforeach

                </select>

            </div>
            <div class="col-12  col-lg-8">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-12 col-md-6 p-4">
                                <div class="row">
                                    Oficina de Entrega:
                                    <select name="sel_est_origen" id="sel_est_origen" class="fmt_001"
                                        onchange="get_est_values(this.form,1,'dmy');">
                                        @foreach ($offices as $office)
                                            <option value="{{$office->code}}">{{$office->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row">

                                    Fecha de Entrega:
                                    <input id="date_time_pickup" name="" class="form-control bg-white datepicker"
                                        data-date-format="m/d/Y G:iK" data-enable-time="true">
                                </div>

                            </div>
                            <div class="col-12 col-md-6 p-4">

                                <div class="row ">
                                    Oficina de Entrega:
                                    <select name="sel_est_return" id="sel_est_return" class="fmt_001"
                                        onchange="get_est_values(this.form,1,'dmy');">
                                        @foreach ($offices as $office)
                                            <option value="{{$office->code}}">{{$office->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="row ">
                                    Fecha de Devolucion:
                                    <input id="date_time_return" name="" class="form-control bg-white datepicker"
                                        data-date-format="m/d/Y G:iK" data-enable-time="true">
                                </div>

                            </div>

                        </div>


                    </div>




                </div>

            </div>

        </div>


    </div>


    <button class="btn-contacto">Calcular</button>

</div>
<h2>Las opiniones de nuestros clientes</h2>
<div class="container">

    <div class="testimonial one">
        <h3>Luis</h3>
        <span>★★★★✰</span>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni similique, labore architecto repellendus
            rem quam illo rerum corporis culpa corrupti voluptatibus placeat dolore odit soluta, deserunt libero
            laboriosam. Velit, iure?</p>
    </div>
    <div class="testimonial two">
        <h3>Marcos</h3>
        <span>★★★★★</span>
        <p>Lorem ipsum dolor sit </p>
    </div>
    <div class="testimonial three ">
        <h3>Lucía</h3>
        <span>★★★✰✰</span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae voluptates a animi ipsam, nemo dolorum
            blanditiis exercitationem. Quo necessitatibus odio quibusdam doloremque, totam voluptates, a sit
            doloribus, error placeat ipsa.</p>
    </div>
    <div class="testimonial four">
        <h3>Carmen</h3>
        <span>★★★✰✰</span>
        <p>Lorem ipsum dolor sit amet coum corporis culpa corrupti voluptatibus placeat dolore odit soluta, deserunt
            libero laboriosam. Velit, iure?</p>
    </div>
    <div class="testimonial five">
        <h3>Ramón</h3>
        <span>★★★★★</span>
        <p>Lorem ipsum dolorrem quam illo rerum corporis culpa corrupti voluptatibus placeat dolore odit soluta,
            deserunt libero laboriosam. Velit, iure?</p>
    </div>

</div>
<div id="faq">
    <h2>Preguntas fecuentes</h2>

    <button class="accordion">¿Cuales son los requisitos para alquilar un vehiculo?</button>
    <div class="panel">
        El cliente debe cumplir con los siguientes requisitos para poder alquilar:
        <ul>
            <li>• Edad mínima 21 años.</li>
            <li>• Cédula de identidad o pasaporte valido.</li>
            <li>• Licencia de conducir al día.</li>
            <li>• Tarjeta de Crédito para el depósito respectivo.</li>
            <li>• Under age fee de 21 a 25 años $ 10.00 por día.</li>


            <li>• Costo de la cobertura para terceros cuando el cliente utiliza el de su tarjeta de crédito $10.00
                por
                día.</li>
            <li>• Clientes nacionales deben presentar su cédula de identidad. Adicionalmente para las categorías
                de Standard SUV en adelante, deben presentar como mínimo 2 tarjetas de crédito, una de las
                cuales debe ser black ó infinite. Esto aplica para todos los conductores del contrato. Los clientes
                costarricenses pueden optar por la Cobertura Total a partir de su cuarta renta.</li>
            <li>• El depósito requerido para el alquiler del vehículo es por un monto de US $500.00</li>

        </ul>








    </div>

    <button class="accordion">¿Puede devolver el vehiculo en una sucursal diferente de donde lo recibi?</button>
    <div class="panel">
        <p>La entrega y devolución gratuita están disponibles en las oficinas y dentro de un radio de
            20 km de las oficinas que ofrecen servicios de entrega externa para alquileres de 2 días
            o más, entre las 9:00 a.m. y las 4:00 p.m. Para entregas y devoluciones fuera de la
            oficina, es necesario verificar la disponibilidad del servicio, ya que está sujeto a
            coordinación con el área de Operaciones. A partir del 16 de diciembre de 2025, el radio
            se reducirá de 20 km a 15 km.
            Cobro de $50,00 + iva aplica para entregas y devoluciones en diferentes cuando la renta
            es menor de 3 días. Este cargo no aplica cuando las rentas son entre oficinas del GAM. Si la renta es de
            mas de 3 dias no tiene cargo adicional.
            .</p>
    </div>

    <button class="accordion">¿Están permitidas las mascotas?</button>
    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda eos quas, quibusdam laudantium hic
            modi ratione dolorem sequi nobis, impedit voluptates voluptas iste! Numquam autem aspernatur, magnam
            accusamus dolores ad?</p>
    </div>

</div>


@endsection
