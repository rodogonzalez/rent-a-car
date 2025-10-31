@extends(backpack_view('plain'))


@section('content')


<div id="hero">
    <div id="hero-img">
        <div class="container">
            <h1 class="white">Pura Vida al Volante: Renta tu Auto en Costa Rica al Mejor Precio y con Súper
                Beneficios</h1>
            <div class="separador"></div>
            <a href="#pricing-component" class="btn-contacto"> Calcula ya tu presupuesto</a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div id="car-cards" class="row">
        <div class="col-12 col-lg-4  p-4 m-0">
            <div class="card p-4">
                <h3>Compactos y Económicos</h3>
                <div class="car-card-img car-card-1"></div>
                <p>desde 38€</p>

            </div>



        </div>
        <div class="col-12 col-lg-4  p-4 m-0">
            <div class="card p-4">
                <h3>SUVs 4x2</h3>
                <div class="car-card-img car-card-2"></div>
                <p>desde 37€</p>

            </div>

        </div>
        <div class="col-12 col-lg-4  p-4 m-0">
            <div class="card p-4">

                <h3>4x4 Todoterreno</h3>
                <div class="car-card-img car-card-3"></div>
                <p>desde 40€</p>

            </div>

        </div>
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

                </select>

            </div>
            <div class="col-12  col-lg-8">
                <div class="row">
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-12 col-md-6">Oficina de Entrega:
                                <select name="sel_est_origen" id="sel_est_origen" class="fmt_001"
                                    onchange="get_est_values(this.form,1,'dmy');">
                                    <option value="2">SJO Airport</option>
                                    <option value="43">Pérez Zéledon</option>
                                    <option value="6">Liberia Airport</option>
                                    <option value="3">Paseo Colon</option>
                                    <option value="25">Plaza Víquez</option>
                                    <option value="4">Hotel Irazú</option>
                                    <option value="5">Hotel Wyndham Herradura</option>
                                    <option value="30">Hotel Costa Rica Marriott</option>
                                    <option value="24">Lindora</option>
                                    <option value="33">Cartago</option>
                                    <option value="34">Curridabat</option>
                                    <option value="35">Palmares</option>
                                    <option value="12">La Fortuna</option>
                                    <option value="13">Peñas Blancas</option>
                                    <option value="20">Playas del Coco</option>
                                    <option value="23">Occidental Papagayo</option>
                                    <option value="7">Tamarindo Beach</option>
                                    <option value="18">Brasilito</option>
                                    <option value="22">Nosara</option>
                                    <option value="8">Samara Beach</option>
                                    <option value="36">Hotel Secret</option>
                                    <option value="37">Hotel Hilton Garden Liberia</option>
                                    <option value="38">Hotel Dreams Las Mareas</option>
                                    <option value="27">Flamingo</option>
                                    <option value="40">Hotel JW Marriott Guanacaste</option>
                                    <option value="9">Mal País</option>
                                    <option value="10">Jacó Beach</option>
                                    <option value="28">Marina los Sueños</option>
                                    <option value="11">Quepos</option>
                                    <option value="29">Marina Pez Vela</option>
                                    <option value="19">Dominical</option>
                                    <option value="31">Golfito</option>
                                    <option value="15">Puerto Jimenez</option>
                                    <option value="17">Paso Canoas</option>
                                    <option value="21">Guapiles</option>
                                    <option value="32">Limón</option>
                                    <option value="16">Puerto Viejo, Limón</option>
                                    <option value="26">Uvita</option>
                                    <option value="42">Ciudad Quesada</option>
                                    <option value="44">Puntarenas</option>
                                    <option value="45">Heredia</option>
                                    <option value="46">Liberia Downtown</option>
                                    <option value="47">Nicoya</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                Fecha de Entrega:
                                <input id="date_time_pickup" name="" class="form-control bg-white datepicker"
                                    data-date-format="m/d/Y G:iK" data-enable-time="true">
                            </div>

                        </div>


                    </div>
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-12 col-md-6">Oficina de Entrega:
                                <select name="sel_est_return" id="sel_est_return" class="fmt_001"
                                    onchange="get_est_values(this.form,1,'dmy');">
                                    <option value="2">SJO Airport</option>
                                    <option value="43">Pérez Zéledon</option>
                                    <option value="6">Liberia Airport</option>
                                    <option value="3">Paseo Colon</option>
                                    <option value="25">Plaza Víquez</option>
                                    <option value="4">Hotel Irazú</option>
                                    <option value="5">Hotel Wyndham Herradura</option>
                                    <option value="30">Hotel Costa Rica Marriott</option>
                                    <option value="24">Lindora</option>
                                    <option value="33">Cartago</option>
                                    <option value="34">Curridabat</option>
                                    <option value="35">Palmares</option>
                                    <option value="12">La Fortuna</option>
                                    <option value="13">Peñas Blancas</option>
                                    <option value="20">Playas del Coco</option>
                                    <option value="23">Occidental Papagayo</option>
                                    <option value="7">Tamarindo Beach</option>
                                    <option value="18">Brasilito</option>
                                    <option value="22">Nosara</option>
                                    <option value="8">Samara Beach</option>
                                    <option value="36">Hotel Secret</option>
                                    <option value="37">Hotel Hilton Garden Liberia</option>
                                    <option value="38">Hotel Dreams Las Mareas</option>
                                    <option value="27">Flamingo</option>
                                    <option value="40">Hotel JW Marriott Guanacaste</option>
                                    <option value="9">Mal País</option>
                                    <option value="10">Jacó Beach</option>
                                    <option value="28">Marina los Sueños</option>
                                    <option value="11">Quepos</option>
                                    <option value="29">Marina Pez Vela</option>
                                    <option value="19">Dominical</option>
                                    <option value="31">Golfito</option>
                                    <option value="15">Puerto Jimenez</option>
                                    <option value="17">Paso Canoas</option>
                                    <option value="21">Guapiles</option>
                                    <option value="32">Limón</option>
                                    <option value="16">Puerto Viejo, Limón</option>
                                    <option value="26">Uvita</option>
                                    <option value="42">Ciudad Quesada</option>
                                    <option value="44">Puntarenas</option>
                                    <option value="45">Heredia</option>
                                    <option value="46">Liberia Downtown</option>
                                    <option value="47">Nicoya</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
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


    <button class="btn-contacto">Calcular</button>

</div>
<h2>Las opiniones de nuestros clientes</h2>
<div id="testimonial-container">

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
