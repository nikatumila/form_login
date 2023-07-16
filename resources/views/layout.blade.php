<!DOCTYPE html>
<html lang="en">

<head>
    <title>CarDrive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Car<span>Drive</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @if ($active == 'Home') active @endif"><a href="{{ route('home') }}"
                            class="nav-link">Home</a></li>
                    <li class="nav-item @if ($active == 'Cars') active @endif"><a href="{{ route('Cars') }}"
                            class="nav-link">Cars</a></li>
                    <li class="nav-item @if ($active == 'Services') active @endif"><a
                            href="{{ route('Services') }}" class="nav-link">Services</a></li>
                    <li class="nav-item @if ($active == 'Schedule') active @endif"><a
                            href="{{ route('Schedule') }}" class="nav-link">Schedule</a></li>
                    <li class="nav-item @if ($active == 'Contact') active @endif"><a
                            href="{{ route('Contact') }}" class="nav-link">Contact</a></li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    <!-- END nav -->
    @if ($active == 'Home')
        <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('assets') }}/images/bg_1.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                    <div class="col-lg-8 ftco-animate">
                        <div class="text w-100 text-center mb-md-5 pb-md-5">
                            <h1 class="mb-4">SELAMAT DATANG DI CARDRIVE</h1>
                            <p style="font-size: 18px;">Melangkah Pasti, Mengemudi Aman, Menjadi Pengemudi yang
                                Bertanggung
                                Jawab</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <section class="hero-wrap hero-wrap-2 js-fullheight"
            style="background-image: url('{{ asset('assets') }}/images/bg_3.jpg');"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                    <div class="col-md-9 ftco-animate pb-5">
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>{{ $active }} <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                        <h1 class="mb-3 bread">Our {{ $active }}</h1>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @yield('content')


    <footer class="footer bg-black ">
        <div class="container ">

            <div class="row">
                <div class="col-md-12 my-2 text-center">

                    <p class="my-auto text-white">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/aos.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.timepicker.min.js"></script>
    <script src="{{ asset('assets') }}/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets') }}/js/google-map.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>
