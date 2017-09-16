@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 50px;">
    <div class="row">
        <!--==========================
  Portfolio Section
============================-->
        <section id="portfolio">
            <div class="container wow fadeInUp">

                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="{{route('preview')}}">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                <a href="#" class="cd-popup-trigger btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                                {{--pop up model--}}
                                {{--<div class="cd-popup" role="alert">
                                    <div class="cd-popup-container">
                                        <p>Картата е додадена во кошничка</p>
                                        <a href="#0" class="cd-popup-close img-replace">Затвори</a>
                                    </div> <!-- cd-popup-container -->
                                </div>--}}
                                {{--pop up model end--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
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
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
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
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
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
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="{{route('preview')}}">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
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
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="{{route('preview')}}">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
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
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
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
                                <a class="portfolio-item" style="background-image: url({{asset('assets/img/portfolio-1.jpg')}});" href="">
                                    <div class="details">
                                        <span>Повеќе</span>
                                    </div>
                                </a>
                            </div>
                            <div class="panel-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                                <a href="#" class="cd-popup-trigger btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                                {{--pop up model--}}
                                <div class="cd-popup" role="alert">
                                    <div class="cd-popup-container">
                                        <p>Додадено во кошничка</p>
                                        <a href="#" class="cd-popup-close img-replace">Затвори</a>
                                    </div> <!-- cd-popup-container -->
                                </div>
                                {{--pop up model end--}}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
</div>
</div>
@endsection
