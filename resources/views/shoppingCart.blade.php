@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="glyphicon glyphicon-shopping-cart pull-right"></i>Твојата кошничка</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="box box-solid">
                                    <div class="box-header with-border" style="background-color:#5bc0de; padding: 20px 10px; margin-top: 0;">
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove" style="color: rgb(255, 255, 255);"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="{{route('preview')}}">
                                                    <img src="{{asset('assets/img/sting.jpg')}}" alt="Ample Admin" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <p class="pull-right">
                                                        <a href="https://themequarry.com/theme/ample-admin-the-ultimate-dashboard-template-ASFEDA95" class="btn btn-success btn-md" style="margin-top:10px;">
                                                            Купи
                                                        </a>
                                                    </p>
                                                    <h4 style="margin-top: 0">Карта за концертот на STING</h4>
                                                    <label style="font-size:18px;">Цена: 1200 ден</label><br>
                                                    <label>
                                                        Број на карти:
                                                        <input type="text" class="input-sm" value="1" style="width:30px">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-solid">
                                    <div class="box-header with-border" style="background-color:#5bc0de; padding: 20px 10px; margin-top: 0;">
                                        <div class="box-tools pull-right">
                                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove" style="color: rgb(255, 255, 255);"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="{{route('preview')}}">
                                                    <img src="{{asset('assets/img/englezi.jpg')}}" alt="Ample Admin" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <p class="pull-right">
                                                        <a href="https://themequarry.com/theme/ample-admin-the-ultimate-dashboard-template-ASFEDA95" class="btn btn-success btn-md" style="margin-top:10px;">
                                                            Купи
                                                        </a>
                                                    </p>
                                                    <h4 style="margin-top: 0">Карта за претставата "НЕ СЕ КЛАДИ НА ЕНГЛЕЗИ"</h4>
                                                    <label style="font-size:18px;">Цена: 500 ден</label><br>
                                                    <label>
                                                        Број на карти:
                                                        <input type="text" class="input-sm" value="3" style="width:30px">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection