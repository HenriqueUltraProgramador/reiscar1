@extends('layouts.app')

@section('content')

<body class="backgound-cars-tela">
  <section class="d-flex justify-content-center align-items-center h-100 min-vh-100">
    <div class="container backgound-cars-tela">
      <div class="row gy-4">
        @foreach ($cars as $key => $car)
        <div class="col-sm-4">
          <div class="card bgxs-tela h-100 d-flex p-2 flex-column">
            <div class="card-body ">
              <img class="img-fluid card-img-top cars-img" src="{{ $car['image'] }}">
              <p class="card-text">
              <h3>{{ $car['brand'] }} {{ $car['model'] }}</h3>
              </p>
              <p>
              <h5>Estado: <span class="badge rounded-pill bg-dark">{{ $car['state'] }}</span>
              </h5>
              </p>
              <p> {{ \Illuminate\Support\Str::limit($car['description'], $limit = 300, $end = '...') }} </p>
              <p class="card-text">
              <h4 class="text-end">{{ $car['price'] }}€</h4>
              </p>
              <a href="{{route('cars.show', ['id' => $car['id']]) }}">
                <button class="btn btn-block btn-outline-primary backgound-cars-tela">Ver mais</button>
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</body>



@endsection