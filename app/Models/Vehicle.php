<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Vehicle extends Model
{
    use CrudTrait;
    //
    protected $table = 'vehicles';
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

    protected function getPriceAttribute()
    {


        $current_date   = date("Y-m-d");
        $condition      = " date_start<='$current_date' ";
        $current_period = \App\Models\RatesPeriod::whereRaw($condition)->orderByRaw('date_start DESC')->first();


        if (is_null($current_period))
            return 0;

        $price_record = \App\Models\VehiclesRate::whereRaw("rates_periods_id=" . $current_period->id . " and code = '$this->code'")->first();

        if (is_null($price_record))
            return 0;

        return $price_record->price;

    }


}
