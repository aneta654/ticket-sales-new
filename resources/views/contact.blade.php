@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 100px; padding-bottom: 50px;">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('assets/img/sell-tickets.png')}}" class="img-responsive">
            </div>
            <div class="col-md-8">
                <div class="well well-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Име</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Е-пошта</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input type="email" class="form-control" id="email" placeholder="Внеси е-маил адреса" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Тема</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        <option value="na" selected="">Одбери:</option>
                                        <option value="service">Техничка подршка</option>
                                        <option value="suggestions">Начин на плаќање</option>
                                        <option value="product">Продавање карти </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Порака</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="порака"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" style="background-color: #5bc0de;">
                                    Испрати</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection