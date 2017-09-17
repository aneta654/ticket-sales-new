@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="padding-top: 60px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="panel panel-default" style=" box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;">
                    <div class="panel-heading" style="height: 80px;">
                        <a href="#" class="cd-popup-trigger btn btn-blue btn-lg pull-right" style="width: 100px; height: 60px;"><i class="glyphicon glyphicon-shopping-cart" style="font-size: 30px;"></i></a>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-6 ">
                            <div class="col-md-12">
                                <h3>TOTO</h3>
                                <br/>
                                <br/>
                            </div>
                            <p class="MsoNormal">Со огромно задоволство сакаме да ве информираме дека еден од најголемите американски бендови на сите времиња -
                                <strong>ТОТО,</strong> за прв пат доаѓа во Скопје, со концерт во рамките на јубилејната турнеја по повод
                                <strong>40 години од нивното постоење,</strong> на<strong> 5-ти март 2018та година</strong>, во
                                <strong>ВИП арената &bdquo;Борис Трајковски&ldquo;.</strong></p>
                            <p class="MsoNormal">Познати по своите врвни свирачки достигнувања,
                                <strong>ТОТО</strong> е бенд кој светската музичка јавност го третира како еден од најдобрите во
                                музичката индустрија, а членовите ги карактеризира како &bdquo;<strong>Кралеви на живата свирка&ldquo;.&nbsp;
                                </strong></p>
                            <p class="MsoNormal">Во 2018-та тргнуваат на голема светска турнеја која опфаќа 40 земји, насловена
                                <strong>"40 Trips Around The Sun"</strong>, со која одбележуваат 4 децениска работа,
                                а и со нов студиски албум кој треба да излезе во февруари идната година.&nbsp;</p>
                            <p class="MsoNormal">&nbsp;-<em>Јас, David, Steve и Joseph сме задоволни и истовремено возбудени за долгогодишниот
                                    успех на бендот. Оваа јубилејна турнеја, по повод 40 години од постоењето на ТОТО ќе биде многу специјална турнеја за секој од нас и за сите наши фанови низ светот</em>- вели гитаристот <strong>Steve Lukather.</strong></p>
                            <p class="MsoNormal">За родоначалниците на стадионскиот рок ова ќе биде 23 турнеја и 14-ти по ред студиски албум,
                                после низа мултиплатинести плочи продадени во преку 35 милиони примероци.&nbsp;</p>
                            <p class="MsoNormal">Хитовите како што се &bdquo;Rosanna&ldquo;, &bdquo;Africa&ldquo;,
                                &bdquo;Hold The Line&ldquo; и уште многу други им донесоа многу музички признанија и пет Греми награди.
                                &nbsp;</p>
                        </div>
                        <div class="col-md-6">
                            <br/>
                            <br/>
                            <img src="{{asset('assets/img/toto17_golema.jpg')}}">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- pop up model--}}
        <div class="cd-popup" role="alert">
            <div class="cd-popup-container">
                <p>Додадено во кошничка</p>
                <a href="#" class="cd-popup-close img-replace">Затвори</a>
            </div> <!-- cd-popup-container -->
        </div>
        {{--pop up model end--}}
    </div>
    @endsection