<div class="services-container">
    @foreach ($vehicles as $type)
        <div class="box">
            <div class="box-img"><img src="/images/{{ $type->code  }}.png" alt="car image"></div>
            <h3>{{$type->name}}</h3>
            <h2>${{$type->price}} {{ __('rent-a-car.per-day') }} <span><small>${{($type->price * 4 * 7)}} /
                        {{ __('rent-a-car.per-month') }}</small></span></h2>

            <a href="#" class="btn" onclick="set_car('{{$type->code}}')">{{ __('rent-a-car.reserve') }}</a>
            <small>{{ __('rent-a-car.price-no-taxes') }}</small><br>
            <small>{{ __('rent-a-car.period-dates') }} {{$type->season}}</small>
        </div>
    @endforeach
</div>