<form action="{{route('reservation.request')}}" class="m-4 p-4" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="container">

        <div class="row row-cols-1 pb-2">
            <div class="col ">
                <div class="row row-cols-1 row-cols-lg-2 ">
                    <div class="col  p-3 ">
                        {{ __('rent-a-car.form.entrega') }}:
                        <select name="sucursal_retiro" id="sel_est_origen" class="fmt_001">
                            @foreach ($offices as $office)
                                <option value="{{$office->code}}">{{$office->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col  p-3   ">
                        {{ __('rent-a-car.form.fecha-inicio') }}:
                        <input id="date_time_pickup" name="date_time_pickup" class=" datepicker" required
                            data-default-date="{{  date('m/d/Y', strtotime('tomorrow pb-2')) }} 11:00am"
                            data-date-format="m/d/Y G:iK" data-enable-time="true">
                    </div>
                </div>
            </div>
            <div class="col  ">
                <div class="row  row-cols-1  row-cols-lg-2  ">
                    <div class="col   p-3 ">
                        {{ __('rent-a-car.form.devolucion') }}:
                        <select name=" sucursal_devolucion" id="sel_est_return" class="fmt_001">
                            @foreach ($offices as $office)
                                <option value="{{$office->code}}">{{$office->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col   p-3  ">
                        {{ __('rent-a-car.form.fecha-fin') }}:
                        <input id="date_time_return" name="date_time_return" class=" datepicker" required
                            data-date-format="m/d/Y G:iK"
                            data-default-date="{{  date('m/d/Y', strtotime('+3 days')) }} 11:00am"
                            data-enable-time="true">
                    </div>
                </div>
            </div>
        </div>

        <div class="row pb-2">
            <div class="col-12 col-md-3  col-lg-2">{{ __('rent-a-car.form.nombre') }}:</div>
            <div class="col-12 col-md-7">
                <input id="customer_name" type="textfield" name="customer_name" class="w-100"
                    placeholder="Ingrese el nombre de quien haria la reserva" required>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-12 col-md-3 col-lg-2">{{ __('rent-a-car.form.telefono') }}:</div>
            <div class="col-12 col-md-7">
                <input type="text-field" id="customer_phone" name="customer_phone" class="w-100"
                    placeholder="Ingrese su número de teléfono" required>
            </div>
        </div>
        <div class="row pb-2">
            <div class="col-12 col-md-3  col-lg-2">{{ __('rent-a-car.form.correo') }}:</div>
            <div class="col-12 col-md-7">
                <input type="text-field" class="w-100" name="customer_email" id="customer_email"
                    placeholder="Ingrese su correo electrónico" required>
            </div>
        </div>
        <div class="row pb-2 mt-4">
            <div class="col-6 mb-4 ">
                {{ __('rent-a-car.form.modelo') }}:
                <select id="select-car" name="tipo_vehiculo" required class="w-100">
                    <option disabled selected>Elige uno</option>
                    @foreach ($vehicles as $vehicle)
                        <option value="{{$vehicle->code}}">{{$vehicle->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mb-4 ">
                {{ __('rent-a-car.form.seguro') }}:
                <select id="seguro_tipo" name="seguro_tipo" required class="w-100">


                    <option value="BASICO">Basico</option>
                    <option value="FULL">Full</option>


                </select>
            </div>

        </div>
    </div>
    <input type="submit" class="btn" value="{{ __('rent-a-car.form.solicitar') }}">
    <div>
        <small>
            @lang('rent-a-car.form.label-footer')
        </small>
    </div>
</form>