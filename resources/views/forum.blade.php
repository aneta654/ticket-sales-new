@extends('layouts.app')

@section('content')
<section class="content">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="timeline" style="margin-top: 50px">
                <li class="time-label">
                  <span class="bg-green">
                    18 Септември
                  </span>
                </li>
                <li>
                    <i class="fa fa-user bg-aqua"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> пред 5 минути</span>
                        <h3 class="timeline-header"><a href="#">Тина Трпкова</a></h3>
                        <div class="timeline-body">
                            <h4>Карта за концертот на Sting</h4><br>
                            Продавам карта за концертот на Sting. Во однос на цената можам да направам одреден попуст. Контакт: tina@gmail.com
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">Прочитај повеќе</a>
                        </div>
                    </div>
                </li>
                <li>
                    <i class="fa fa-user bg-aqua"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 12:49</span>
                        <h3 class="timeline-header"><a href="#">Мартин Гелески</a></h3>
                        <div class="timeline-body">
                            <h4>Карта за претставата „НЕ СЕ КЛАДИ НА ЕНГЛЕЗИ“</h4><br>
                            Продавам карта за претставата „Не се клади на енглези“. Контактирате ме на телефонскиот број...
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">Прочитај повеќе</a>
                        </div>
                    </div>
                </li>
                <li class="time-label">
                  <span class="bg-green">
                    17 Септември
                  </span>
                </li>
                <li>
                    <i class="fa fa-user bg-aqua"></i>
                    <div class="timeline-item">
                        <span class="time"><i class="fa fa-clock-o"></i> 14:20</span>
                        <h3 class="timeline-header"><a href="#">Тамара Стоичкова</a></h3>
                        <div class="timeline-body">
                            <h4>Карта за концертот на Тото</h4><br>
                            Продавам 2 карти, едната е за концертот на Sting а другата за концертот на Тото...
                        </div>
                        <div class="timeline-footer">
                            <a class="btn btn-primary btn-xs">Прочитај повеќе</a>
                        </div>
                    </div>
                </li>
                <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                </li>
            </ul>
        </div>
    </div>
</div>
</section>
@endsection