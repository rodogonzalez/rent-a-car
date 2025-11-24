<div class="services-container">
    @foreach ($vehicles as $type)
    <div class="box">
        <div class="box-img"><img src="/images/{{ $type->code  }}.png" alt="car image"></div>
        <h3>{{$type->name}}</h3>
        <h2>${{$type->price}} por dia | ${{($type->price * 4 * 7)}} <span>/month</span></h2>
        <a href="#" class="btn"  onclick="set_car('{{$type->code}}')">Reservar</a>
        <small>** No incluye impuestos ni seguros</small>
    </div>
    @endforeach
</div>