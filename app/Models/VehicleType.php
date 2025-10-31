<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class VehicleType extends Model
{
    use CrudTrait;
    //
    protected $table = 'vehicle_types';
}
