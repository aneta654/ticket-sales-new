@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px;">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Внеси карта</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="Username">Тип на карта</label>
                                    <input type="text" class="form-control input-sm" id="Ticket" name="Ticket">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Опис</label>
                                    <textarea rows="5" cols="10" type="text" class="form-control" id="Description" name="Description">
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Password">Важи до:</label>
                                    <input type="date" class="form-control input-sm" id="Date" name="Date">
                                </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <input type="submit" value="Внеси" class="btn btn-info btn-block">
                        </div>

                    </div>
                </div>
                <a id="mainPage" href="{{route('home')}}"><i class="fa fa-home fa-lg"></i></a>
            </div>
        </div>
    </div>
@endsection