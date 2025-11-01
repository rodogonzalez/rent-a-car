<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class VehiclesRate extends Model
{
    use CrudTrait;
    //
    protected $table = 'vehicles_rates';

    protected $fillable = [

        'code',
        'price'


    ];


}
