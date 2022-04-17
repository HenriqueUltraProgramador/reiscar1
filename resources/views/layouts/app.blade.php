<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>ReisCar</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-extend color-custom ">
        <nav class="navbar navbar-expand-sm bg-dark navbar-custom">
            <a href="{{route('cars.index')}}" class="nav-link">
                <img class="text-custom navbar-brand mb-0 " src="/img/reiscarlogo2.png" alt="ReisLogo" width="500" height="150">
            </a>
            <button style="color:#daa520" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                    <h1>Menu</h1>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="https://www.facebook.com/ReisCar-181321509206357" class="nav-link fa fa-facebook-square icons" style="font-size:50px"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/reiscar08/" class="nav-link fa fa-instagram icons" style="font-size:50px"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/ricardoreis1986" class="nav-link fa fa-facebook-square icons" style="font-size:50px"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/ricardoreis1986/" class="nav-link fa fa-instagram icons" style="font-size:50px"></a>
                    </li>
                    <li>
                        <a href="tel:+6494461709" class="nav-link fa fa-phone icons" style="font-size:50px"></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> {{ Config::get('languages')[App::getLocale()]['display'] }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}</a>
                            @endif
                            @endforeach
                        </div>
                    </li>

                </ul>
            </div>
        </nav>

        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                </div>
            </nav>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>