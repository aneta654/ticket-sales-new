@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!--==========================
  Portfolio Section
============================-->
        <section id="portfolio">
            <div class="container wow fadeInUp">

                <div class="row">
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
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
                                <a href="#" class="btn btn-lg btn-blue"><i class="glyphicon glyphicon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
</div>
@endsection
