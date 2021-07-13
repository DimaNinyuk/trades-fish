<!doctype html>
<html lang="en">

<head>
    <title>Сайт-аукцион по биржевой торговле рыбопродукцией в камчатском крае</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="background-color: black">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3 ">
                        <div class="site-logo">
                            <a href="/seller-main">{{ Auth::user()->name }}</a>
                        </div>
                    </div>

                    <div class="col-9  text-right">


                        <span class="d-inline-block d-lg-none"><a href="/seller-main" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li><a href="/seller-main/0" class="nav-link">Мои сделки</a></li>
                                <li><a href="/seller-analytics" class="nav-link">Статистика профиля</a></li>
                                <li><a href="/seller-edit" class="nav-link">Настройка профиля</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выйти
                                    </a>
                                </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>
        @yield('content')
        <footer class="site-footer">
            <div class="container">

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> Сайт-аукцион по биржевой торговле рыбопродукцией в камчатском крае
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

    </div>

    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.animateNumber.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script src="/js/jquery.easing.1.3.js"></script>
    <script src="/js/bootstrap-datepicker.min.js"></script>
    <script src="/js/aos.js"></script>

    <script src="/js/main.js"></script>

</body>

</html>
<!--<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 
                    <ul class="navbar-nav mr-auto">

                    </ul>

                
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
-->