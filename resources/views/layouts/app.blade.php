<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nepalese-in-Europe</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
          <div class="container">
            <div class="navbar-start">
                <a href="{{route("home")}}" class="navbar-item">
                    <img src="{{ asset('images/nepaleseineurope-logo.png')}}" alt="Nepalese in Europe" />
                </a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">ShoutBox</a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile">Market</a>
                <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            </div>
            <div class="navbar-end" style="overflow: visible;">
                @if (Auth::guest())
                    <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                    <a href="{{route('register')}}" class="navbar-item is-tab">Join our Community</a>
                @else
                    <button class="dropdown is-aligned-right navbar-item is-tab">
                        Hey Ritesh!! <span class="icon"><i class="fa fa-caret-down" ></i></span>
                    <ul class="dropdown-menu">
                        <li><a href="#">
                            <span class="icon"><i class="fa fa-fw fa-user-circle-o"></i></span>
                            Profile</a></li>
                        <li><a href="#">
                            <span class="icon"><i class="fa fa-fw fa-bell"></i></span>
                            Notification</a></li>
                        <li><a href="#">
                            <span class="icon"><i class="fa fa-fw fa-gear"></i></span>
                        Settings </a></li>
                        <li class="separator"></li>
                        <li><a href="#">
                            <span class="icon"><i class="fa fa-fw fa-sign-out"></i></span>
                            Logout</a></li>
                    </ul>
                    </button>
                @endif
            </div>
          </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
