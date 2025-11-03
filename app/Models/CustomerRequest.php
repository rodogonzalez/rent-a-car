<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class CustomerRequest extends Model
{
    use CrudTrait;
    //
    protected $table = 'customer_requests';

    protected $fillable = [

        'name',
        'email',
        'phone',
        'vehicles_code',
        'date_start',
        'date_end',
        'car_pick_up',
        'car_return',
        'insurance_type'


    ];
}
