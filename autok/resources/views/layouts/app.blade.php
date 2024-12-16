<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="resources/css/app.css">
    <script src="{{asset('js/jQuery-3.7.1.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <title>Document</title>
    <style>
        body{
            background-color: lightslategrey;
            font-family: 'Times New Roman', Times, serif;
        }
        a{
            text-decoration: none;
            font-size: x-large;
            color: black;
            padding: 3.5%;
        }
        .container{
            margin-top: 60px;
            width: 100%;
        }
        td{
            font-size: x-large;
            padding: 10px;
        }
        footer{
            position: fixed;
            top: 98%;
        }
        nav{
            margin-top: 30px;
            padding-bottom: 30px;
            border-bottom: 5px solid black;
        }
    </style>

</head>
<body>
    <nav>
        <a href="{{route('fuels')}}">Üzemanyagok</a>&nbsp
        <a href="{{route('models')}}">Modellek</a>&nbsp
        <a href="{{route('colors')}}">Színek</a>&nbsp
        <a href="{{route('bodies')}}">Karosszériák</a>&nbsp
        <a href="{{route('transmissions')}}">Sebváltók</a>&nbsp
        <a href="{{route('makers')}}">Gyártók</a></li>&nbsp
        <a href="{{route('cars')}}">Járművek</a></li>&nbsp
       <!-- <a href="{{route('cars.create')}}">Jármű hozzáadása</a>&nbsp -->
    </nav>
    <div id="app">
        <div class="container">
            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <footer class="text-center">
            {{config('app.name', 'CarLog')}} v{{config('app.version')}} (PHP v{{PHP_VERSION}})
        </footer>
    </div>
</body>
</html>
