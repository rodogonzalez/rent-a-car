<?php

use Illuminate\Support\Facades\Route;
use App\Mail\CustomerRequest;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {

    $offices       = \App\Models\Office::all();
    $vehicles      = \App\Models\Vehicle::all();
    $vehicle_types = \App\Models\VehicleType::all();

    return view('index', ['offices' => $offices, 'vehicles' => $vehicles, 'vehicle_types' => $vehicle_types]);
});



Route::post('/reserva', function () {

    //

    $oficina_retiro     = \App\Models\Office::find($_POST['sucursal_retiro'])->name;
    $oficina_devolucion = \App\Models\Office::find($_POST['sucursal_devolucion'])->name;
    $vehiculo           = \App\Models\Vehicle::whereRaw("code='" . $_POST['tipo_vehiculo'] . "'")->first()->name;
    $fecha_inicio       = $_POST['date_time_pickup'];
    $fecha_fin          = $_POST['date_time_return'];
    $nombre             = $_POST['customer_name'];
    $correo             = $_POST['customer_email'];
    $telefono           = $_POST['customer_phone'];
    $seguro             = $_POST['seguro_tipo'];


    $new_customer_request = [

        'name'           => $nombre,
        'email'          => $correo,
        'phone'          => $telefono,
        'vehicles_code'  => $vehiculo,
        'date_start'     => $fecha_inicio,
        'date_end'       => $fecha_fin,
        'car_pick_up'    => $oficina_retiro,
        'car_return'     => $oficina_devolucion,
        'insurance_type' => $seguro

    ];

    $mensaje_contacto =
        "CODIGO DESCUENTO:  15672.
        Nombre del huésped: *$nombre*
        Tipo de Vehículo: *$vehiculo*
        Tipo de seguro (básico o full): *$seguro*
        Lugar retirar el vehículo. *$oficina_retiro*
        Fecha y hora entrega: *$fecha_inicio*
        Lugar devolución del vehículo: *$oficina_devolucion*,
        Fecha y hora devolucion: $fecha_fin
        Email: *$correo*";

     $msg ="
     Nombre del huésped :            <b>$nombre</b>\n
     Tipo de Vehículo   :            $vehiculo\n
     Tipo de seguro (básico o full): $seguro\n
     Lugar retirar el vehículo.      $oficina_retiro\n
     Fecha y hora entrega:           $fecha_inicio\n
     Lugar devolución del vehículo:  $oficina_devolucion\n
     Fecha y hora devolucion:        $fecha_fin\n
     Email:                          $correo";



    $mensaje_ws       = urlencode($mensaje_contacto);


    Mail::to('rodogonzalez@msn.com')->send(new CustomerRequest($msg));


    \App\Models\CustomerRequest::create($new_customer_request);







    return redirect('https://wa.me/+50687766617?text=' . $mensaje_ws);
    /*




*/
    dd("hola :) $nombre $correo $telefono $oficina_retiro $oficina_devolucion $vehiculo $fecha_inicio $fecha_fin", $_POST);
})->name('reservation.request');
