<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $offices       = \App\Models\Office::all();
    $vehicles      = \App\Models\Vehicle::all();
    $vehicle_types = \App\Models\VehicleType::all();

    return view('index', ['offices' => $offices, 'vehicles' => $vehicles, 'vehicle_types' => $vehicle_types]);
});
