<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class RatesPeriod extends Model
{
    use CrudTrait;
    //
    protected $table = 'rates_periods';

    protected $fillable = [

        'name',
        'date_start',
        'date_end'

    ];
}
