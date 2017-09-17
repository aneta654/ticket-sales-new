@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 50px;">
    <div class="row">
        <!--=========================Portfolio Section============================-->
        <section id="portfolio">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/sting.jpg')}});" href="{{route('preview')}}">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <h4>STING</h4>
                                <p>Во рамките на големата светска турнеја „57th & 9th“ по повод истоимениот албум, на
                                    15-ти октомври во ВИП арената „Борис Трајковски“ во Скопје, концерт ќе одржи едно од
                                    најголемите светски музички имиња на сите времиња- STING!</p>
                                <a href="#" class="cd-popup-trigger btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/toto17_golema.jpg')}});" href="{{route('preview')}}">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <h4>TOTO</h4>
                                <p>Еден од најголемите американски бендови на сите времиња - ТОТО, за прв пат доаѓа во Скопје...</p>
                                <a href="#" class="cd-popup-trigger btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/englezi.jpg')}});" href="{{route('preview')}}">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <h4>Не се клади на енглези</h4>
                                <p>Претставата "НЕ СЕ КЛАДИ НА ЕНГЛЕЗИ" на 21 јуни во 21:00 хуманитарно
                                    ќе се одигра на големата сцена во МНТ</p>
                                <a href="#" class="cd-popup-trigger btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                                {{--pop up model--}}
                                {{--<div class="cd-popup" role="alert">
                                    <div class="cd-popup-container">
                                        <p>Картата е додадена во кошничка</p>
                                        <a href="#" class="cd-popup-close img-replace">Затвори</a>
                                    </div> <!-- cd-popup-container -->
                                </div>--}}
                                {{--pop up model end--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/onelove.png')}});" href="{{route('preview')}}">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <h4>ONE LOVE TOUR</h4>
                                <p>ONE LOVE Fest Македонската „Иноватива“ и бугарската „Mejdinna stancia“ ја имаат
                                    најдобрата летна турнеја за оваа сезона.
                                    Турнејата „One Love“ ќе помине во осум градови низ Македонија и Бугарија.</p>
                                <a href="#" class="cd-popup-trigger btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                                {{--pop up model--}}
                                {{--<div class="cd-popup" role="alert">
                                    <div class="cd-popup-container">
                                        <p>Картата е додадена во кошничка</p>
                                        <a href="#" class="cd-popup-close img-replace">Затвори</a>
                                    </div> <!-- cd-popup-container -->
                                </div>--}}
                                {{--pop up model end--}}
                            </div>
                        </div>
                    </div>
                   {{-- <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                <a href="#" class="cd-popup-trigger btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                                --}}{{--pop up model--}}{{--
                                <div class="cd-popup" role="alert">
                                    <div class="cd-popup-container">
                                        <p>Додадено во кошничка</p>
                                        <a href="#" class="cd-popup-close img-replace">Затвори</a>
                                    </div> <!-- cd-popup-container -->
                                </div>
                                --}}{{--pop up model end--}}{{--
                            </div>
                        </div>
                    </div>--}}
                    {{--pop up model--}}
                    <div class="cd-popup" role="alert">
                        <div class="cd-popup-container">
                            <p>Додадено во кошничка</p>
                            <a href="#" class="cd-popup-close img-replace">Затвори</a>
                        </div>
                    </div>
                    {{--pop up model end--}}
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
