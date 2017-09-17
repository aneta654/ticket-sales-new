<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Properties -->
    <title>Ticket Sales | @yield('title')</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap3-wysihtml5.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/skins/skin-yellow.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/datepicker/datepicker3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.bootstrap-touchspin.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-toggle.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fileinput.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/about-us.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/framework.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pop-up.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #3c3d41; border-bottom-color: #3c3d41; margin-bottom: 50px;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Ticket Sales
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('shoppingCart')}}">Купи карти</a></li>
                        <li><a href="{{route('ticketSale')}}">Продај карти</a></li>
                        <li><a href="{{route('forum')}}">Форум</a></li>
                        <li><a href="{{route('about')}}">За нас</a></li>
                        <li><a href="{{route('contact')}}">Контакт</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Најави се</a></li>
                            <li><a href="{{ route('register') }}">Регистрирај се</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user fa-lg"></i> {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Одјави се
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

    <div>
        @yield('content')
    </div>

    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"> LOGO </a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Профил</h5>
                    <ul>
                        <li><a href="{{route('home')}}">Дома</a></li>
                        <li><a href="#">Најави се</a></li>
                        <li><a href="#">Регистрирај се</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Карти</h5>
                    <ul>
                        <li><a href="{{route('home')}}">Купи карта</a></li>
                        <li><a href="{{route('ticketSale')}}">Продај карта</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>За нас</h5>
                    <ul>
                        <li><a href="{{route('about')}}">За нас</a></li>
                        <li><a href="{{route('contact')}}">Контакт</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Контакт</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2017 Copyright </p>
        </div>
    </footer>
    </div>
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/select2.full.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/bootstrap/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/datepicker/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.bootstrap-touchspin.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-toggle.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fileinput.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/portfolio.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
   {{-- <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>--}}


    <script>
        $(document).ready(function (e) {
            e(".dropdown-toggle").click(function () {
                var t = e(this).parents(".dropdown").children(".dropdown-menu").is(":hidden");
                if (t) {
                    e(".dropdown .dropdown-menu").show();
                }else{
                    e(".dropdown .dropdown-menu").hide();
                }
            });
        });
    </script>

</body>
</html>
