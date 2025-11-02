<?php

use Illuminate\Support\Facades\Route;

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
    $correo             = $_POST['customer_phone'];
    $telefono           = $_POST['customer_email'];

    $mensaje_ws = urlencode("hola, mi nombre es $nombre, telefono : $telefono, correo $correo, deseo una reserva de un vehiculo $vehiculo, para los dias : $fecha_inicio - $fecha_fin ,
    recoger en $oficina_retiro y devolver en $oficina_devolucion, gracias");

    return redirect('https://wa.me/+50661708285?text=' . $mensaje_ws);
    /*




*/
    dd("hola :) $nombre $correo $telefono $oficina_retiro $oficina_devolucion $vehiculo $fecha_inicio $fecha_fin", $_POST);
})->name('reservation.request');
