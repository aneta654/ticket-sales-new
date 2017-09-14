<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">
    <title>Ticket Sales</title>
    <style>
        body{
            background-color: #525252;
        }
        .centered-form{
            margin-top: 100px;
        }
        .centered-form .panel{
            background: rgba(255, 255, 255, 0.9);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }
        .panel-title{
            margin: 5px auto;
        }
        .panel-body .form-group {
            margin: 10px auto;
        }
        .button-container{
            margin: 22px auto;
        }
        #mainPage {
            position: fixed;
            bottom: 70px;
            right: 110px;
            background: #5bc0de;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            -webkit-transition: 0.3s ease;
            transition: 0.3s ease;
            color: #ffffff;
            text-align: center;
            -webkit-animation: buttonFadeInUp 1s ease;
            animation: buttonFadeInUp 1s ease;
        }
        #mainPage i {
            line-height: 48px;
            font-size: x-large;
        }
        #mainPage:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Регистрирај се</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'register', 'method'=>'POST', 'role'=>'form']) !!}
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label for="FirstName">Име</label>
                                    <input type="text" class="form-control input-sm" id="FirstName" name="first_name" value="{{ old('first_name') }}"/>
                                    @if ($errors->has('first_name'))
                                        <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="LastName">Презиме</label>
                                    <input type="text" class="form-control input-sm" id="LastName" name="last_name" value="{{ old('last_name') }}"/>
                                    @if ($errors->has('last_name'))
                                        <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="Username">Корисничко име</label>
                            <input type="email" class="form-control input-sm" id="Username" name="username" value="{{ old('username') }}" placeholder="Внесете e-mail адреса">
                            @if ($errors->has('username'))
                                <span class="help-block"><strong>{{ $errors->first('username') }}</strong></span>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="Password">Лозинка</label>
                                    <input type="password" class="form-control input-sm" id="Password" name="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group {{ $errors->has('password_repeat') ? ' has-error' : '' }}">
                                    <label for="RepeatPassword">Повтори лозинка</label>
                                    <input type="password" class="form-control input-sm" id="RepeatPassword" name="password_repeat">
                                    @if ($errors->has('password_repeat'))
                                        <span class="help-block"><strong>{{ $errors->first('password_repeat') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="button-container">
                            <input type="submit" value="Регистрирај се" class="btn btn-info btn-block">
                        </div>
                        <a href="{{route('login')}}">Веќе сте регистрирани? Најавете се тука!</a>
                    {{ Form::close() }}
                </div>
            </div>
            <a id="mainPage" href="{{route('home')}}"><i class="fa fa-home fa-lg"></i></a>
        </div>
    </div>
</div>

</body>
</html>

<script type="text/javascript" src="{{ asset('assets/js/jquery.js')}}"></script>

<script>

</script>
