@extends('layouts.app')

@section('content')


<div class="container-extend navbar-custom">
  <div class="row ">
    <div class="col-xs-12 ">
      <div class="card navbar-custom">
        <div class="card-body navbar-custom">
          <img class="img-fluid card-img-top " src="{{ $car['image'] }}">

          <p class="card-text">
          <h1>{{ $car['brand'] }} {{ $car['model'] }}</h1>
          </p>

          <p>
          <h4>Estado: <span class="badge rounded-pill bg-dark">{{ $car['state'] }}</span>
          </h4>
          </p>

          <p> {{$car['description']}} </p>

          <p class="card-text">
          <h1 class="text-end">{{ $car['price'] }}€</h1>
          </p>

          <a href="{{route('cars.index')}} ">
            <button class="btn btn-block btn-outline-secondary">Voltar</button>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection