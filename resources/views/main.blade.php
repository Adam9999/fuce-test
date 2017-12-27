<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    </head>
    <body>

        <div class="header">
            <div class="headerContent">
            <div class="contact">
                <p>Телефон: (499) 340-94-71</p>
                <p>Email: info@future-group.ru</p>
            </div>

                <div class="logo"></div>

                <div class="title">
                    <h1>Комментарии</h1>
                </div>

            </div>
        </div>
        <div class="cont">
            @section('cont')


            @show
        </div>
        <div class="footer">
            <div class="footer_content">
                <div class="logo_footer"></div>

                <div class="footer_right">

                <div class="info_footer">
                    <p>Телефон: (499) 340-94-71</p>
                    <p>Email: info@future-group.ru</p>
                    <p>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
                </div>
                <div class="copyright">
                    <p>&#169; 2010-2014 Future. Все права защищены</p>
                </div>
                </div>
            </div>
        </div>


    </body>
</html>
