<form action="{{route('reservation.request')}}" class="" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="container">


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
            <div class="col-6 mb-4 ">
                Elige el modelo:
                <select id="select-car" name="tipo_vehiculo" required class="w-100">
                    <option disabled selected>Elige uno</option>
                    @foreach ($vehicles as $vehicle)
                    <option value="{{$vehicle->code}}">{{$vehicle->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mb-4 ">
                Seguro:
                <select id="seguro_tipo" name="seguro_tipo" required class="w-100">


                    <option value="BASICO">Basico</option>
                    <option value="FULL">Full</option>


                </select>
            </div>

        </div>
    </div>
    <input type="submit" class="btn-contacto" value="Solicitar Reserva">
</form>