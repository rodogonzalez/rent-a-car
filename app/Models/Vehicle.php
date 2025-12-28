<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;


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

    protected function getSeasonAttribute()
    {

        $current_date        = date("Y-m-d");
        $cache_season_tittle = "current-label-{$current_date}";
        $condition           = "'$current_date' between date_start and date_end ";
        $cache_season_tittle = "current-label-{$current_date}";
        if (Cache::has($cache_season_tittle)) {
            // ..
            return Cache::get($cache_season_tittle);
        }


        $current_period = \App\Models\RatesPeriod::whereRaw($condition)->orderByRaw('date_start DESC')->first();

        if (is_null($current_period)) {

            return '** Consultar Tarifa **';
        }

        Cache::put($cache_season_tittle, $current_period->name);


    }

    protected function getPriceAttribute()
    {
        $current_date        = date("Y-m-d");
        $condition           = " date_start<='$current_date' ";
        $cache_key           = "{$this->code}-{$current_date}";
        $cache_season_tittle = "current-label-{$current_date}";
        
        if (Cache::has($cache_key)) {            
            return Cache::get($cache_key);
        }

        $current_period = \App\Models\RatesPeriod::whereRaw($condition)->orderByRaw('date_start DESC')->first();

        if (is_null($current_period)) {
            Cache::put($cache_key, 0);
            return 0;
        }

        Cache::put($cache_season_tittle, $current_period->name);

        $price_record = \App\Models\VehiclesRate::whereRaw("rates_periods_id=" . $current_period->id . " and code = '$this->code'")->first();

        if (is_null($price_record)) {
            Cache::put($cache_key, 0);
            return 0;
        }

        Cache::put($cache_key, $price_record->price);
        return $price_record->price;
    }
}
