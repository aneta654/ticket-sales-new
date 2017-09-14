<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap/css/bootstrap.css')}}">

        <!-- Styles -->
        <style>
            #hero {
                display: table;
                width: 100%;
                height: 100vh;
                /*background-image: url("/assets/img/background-home.jpg");*/
                background-size: 100%;
            }

            #hero .hero-logo {
                margin: 20px;
            }

            #hero .hero-logo img {
                max-width: 100%;
            }

            #hero .hero-container {
                background: rgba(0, 0, 0, 0.8);
                display: table-cell;
                margin: 0;
                padding: 0;
                text-align: center;
                vertical-align: middle;
            }

            #hero h1 {
                margin: 30px 0 10px 0;
                font-weight: 700;
                line-height: 48px;
                text-transform: uppercase;
                color: #fff;
            }

            @media (max-width: 768px) {
                #hero h1 {
                    font-size: 28px;
                    line-height: 36px;
                }
            }

            #hero h2 {
                color: #999;
                margin-bottom: 50px;
            }

            @media (max-width: 768px) {
                #hero h2 {
                    font-size: 24px;
                    line-height: 26px;
                    margin-bottom: 30px;
                }
                #hero h2 .rotating {
                    display: block;
                }
            }

            #hero .rotating > .animated {
                display: inline-block;
            }

            #hero .actions a {
                font-family: "Raleway", sans-serif;
                text-transform: uppercase;
                font-weight: 500;
                font-size: 16px;
                letter-spacing: 1px;
                display: inline-block;
                padding: 8px 20px;
                border-radius: 2px;
                transition: 0.5s;
                margin: 10px;
            }

            #hero .btn-get-started {
                background: #5bc0de;
                border: 2px solid #5bc0de;
                color: #fff;
            }

            #hero .btn-get-started:hover {
                text-decoration: none;
                background: none;
                border: 2px solid #fff;
                color: #fff;
            }

            #hero .btn-services {
                border: 2px solid #fff;
                color: #fff;
            }

            #hero .btn-services:hover {
                text-decoration: none;
                background: #5bc0de;
                border: 2px solid #5bc0de;
            }
        </style>
    </head>
    <body style="background-image: url({{asset('assets/img/blue.jpg')}});">
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">

                <h1>E-продавница за карти</h1>
                <h2>We create <span class="rotating">beautiful graphics, functional websites, working mobile apps</span></h2>
                <div class="actions">
                    <a href="{{route('login')}}" class="btn-get-started">Купи карта</a>
                    <a href="{{route('login')}}" class="btn-services">Продај карта</a>
                </div>
            </div>
        </div>
    </section>


    </body>
</html>




