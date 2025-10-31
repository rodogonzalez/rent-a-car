<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    use CrudTrait;
    //
    protected $table = 'fuel_types';
}
