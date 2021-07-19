<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            h1 {
                text-align: center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                flex-wrap: wrap;
                display: flex;


            }

            .card{
                margin: 0.5rem;
                width: calc(100% / 4 - 1rem);
            }

            .card img {
                width: 100%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body></body>
    <h1>Viaggi</h1>
        <div class="flex-center position-ref full-height">
            <div class="content">
                @foreach($viaggi as $viaggio)
                <div class="card">
                <img src="{{$viaggio->poster}}">
                <h2>{{$viaggio->place}}</h2>
                <h3>{{$viaggio->description}}</h3>

                </div>

                @endforeach
            </div>

        </div>
    </body>
</html>
