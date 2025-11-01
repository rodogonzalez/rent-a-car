<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class VehiclesRate extends Model
{
    use CrudTrait;
    //
    protected $table = 'vehicles_rates';
    /*
        protected $fillable = [
        'users_id',
        'name',
        'phone',
        'website',
        'email',
        'parking_limit',
        'description',
        'position_lng',
        'position_lat',
        'logo',
        'store_categories_id',
        'wallet_ltc',
        'wallet_bch',
        'wallet_doge',
        'wallet_btc'
    ];
    */

}
