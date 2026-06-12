@extends(backpack_view('default'))
@section('content')
    <section class="home margin_top" id="home">
        <div class="row w-100 p-0 text-center">
            <div class="col-md-3 p-0 m-0 left animate__animated animate__backInUp no_shown_mobile"></div>
            <div class="col-md-6">

                <h1><span>{{ __('rent-a-car.pura-vida') }} </span> {{ __('rent-a-car.al-volante') }}</h1>
                <p>{{ __('rent-a-car.label1') }}</p>
                <h2>{{ __('rent-a-car.respaldo-alamo') }}</h2>

                <div class="form-container">
                    @include('forms.reservation')
                </div>

            </div>
            <div class="col-md-3 p-0 m-0 right animate__animated animate__backInUp  no_shown_mobile"></div>
        </div>




    </section>

    <section class="ride container margin_top" id="ride">
        <div class="heading">
            <span> </span>
            <h1>{{ __('rent-a-car.Como funciona') }} </h1>
        </div>
        <div class="ride-container">
            <div class="box">
                <i class="ri-map-2-line"></i>
                <h2>{{ __('rent-a-car.select-pick-up-drop-off-location') }}</h2>
                <p>{{ __('rent-a-car.select-pick-up-drop-off-location2') }}</p>
            </div>

            <div class="box">
                <i class="ri-calendar-line"></i>
                <h2>{{ __('rent-a-car.choose-date') }}</h2>
                <p>{{ __('rent-a-car.choose-date-desc') }}</p>
            </div>

            <div class="box">
                <i class="ri-bookmark-line"></i>
                <h2>{{ __('rent-a-car.choose-car') }}</h2>
                <p>{{ __('rent-a-car.choose-car-desc') }}</p>
            </div>
        </div>
    </section>

    <section class="services container margin_top" id="services">
        <div class="heading">
            <span>{{ __('rent-a-car.our-fleet') }}</span>
            <h1>{{ __('rent-a-car.our-fleet-desc') }}</h1>
        </div>
        @include ('sections.carmodels')

    </section>

    <section class="about margin_top" id="about">
        <div class="heading">
            <span>{!! __('rent-a-car.heading-benefit.subtitle') !!}</span>
            <h1>{!! __('rent-a-car.heading-benefit.title') !!}</h1>
            <h2>{!! __('rent-a-car.heading-benefit.description') !!}</h2>
        </div>
        <div class="about-container">
            <div class="about-img"><img src="https://www.alamocostarica.com/images/Web-alamo-Agencias.jpg"
                    alt="about banner"></div>
            <div class="about-text">
                <span>{!! __('rent-a-car.benefit-about.badge') !!}</span>
                <p>{!! __('rent-a-car.benefit-about.text') !!}
                <ul class="benefits">
                    <li>{!! __('rent-a-car.benefits.preferential_rates') !!}</li>
                    <li>{!! __('rent-a-car.benefits.simplified_booking') !!}</li>
                    <li>{!! __('rent-a-car.benefits.exclusive_perks') !!}</li>
                    <li>{!! __('rent-a-car.benefits.global_coverage') !!}</li>

                </ul>
                <small>{{ __('rent-a-car.alliance_commitment') }}</small>
                <hr>
                <h3>{{ __('rent-a-car.call_to_action') }}</h3>

                </p>

            </div>
        </div>
    </section>

    <section class="reviews container margin_top" id="reviews">
        <div class="heading">
            <span>Reviews</span>
            <h1>Lo que dicen nuestros clientes</h1>
        </div>
        <div class="reviews-container">
            @include ('sections.testimonials')
        </div>
    </section>

    <section class="newsletter">
        <h2>Suscribete a nuestro Newsletter</h2>
        <div class="box">
            <input type="text" placeholder="Ingresa tu email">
            <a href="#" class="btn">Subscribe</a>
        </div>
    </section>


@endsection