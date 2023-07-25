<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>EVALUACIÓN CLIMA LABORAL</title>
</head>

<style>
    body {
        background-color: rgb(211, 246, 255)
    }
</style>

<body class="antialiased">
    <header>
        <nav class="navbar  bg-body-tertiary" style="background-color: rgb(181, 234, 248);">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('img/bhtrade.png') }}" alt="Logo" width="30" height="24"
                        class="d-inline-block align-text-top">
                    BH TRADE MARKET S.A. DE C.V.
                </a>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
        <div class="row ">
            <div class="col-md-2">
                <img src="{{ asset('img/bhtrade.png') }}" alt="" width="80" height="80">
            </div>
            <div class="col-md-9">
                <h1 class="">RESULTADOS CLIMA LABORAR</h1>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-8 col-md-8">
            <div class="row row-cols-1 row-cols-md-2 g-2 g-md-3">
                <div class="col">
                    <div class="card shadow card-total">
                        <h6 class="text-center">¿A qué rango de edad perteneces?</h6>
                    </div>
                    <canvas id="edades" height="200"></canvas>
                </div>
                <div class="col">
                    <div class="card shadow card-total">
                        <h6 class="text-center">¿Cuál es tu genero? </h6>
                    </div>
                    <canvas id="genero" height="200"></canvas>
                </div>
                <div class="col">
                    <div class="card shadow card-total">
                        <h6 class="text-center">Àrea en la que te desenvuelves actualmente: </h6>
                    </div>
                    <canvas id="Area" height="200"></canvas>
                </div>
                <div class="col">
                    <div class="card shadow card-total">
                        <h6 class="text-center">
                            ¿Cuánto tiempo llevas trabajando en la organización?</h6>
                    </div>
                    <canvas id="tiempo" height="200"></canvas>
                </div>
                <div class="col ">
                    <div class="card shadow card-total">
                        <h6 class="text-center">A qué empresa perteneces</h6>
                    </div>
                    <canvas id="empresa" height="200"></canvas>
                </div>
                <div class="col ">
                    <div class="card shadow card-total">
                        <h6 class="text-center">Al ingresar a trabajar en BH TRADE MARKET o cuando has cambiado de posición ¿Fue difícil adaptarte?</h6>
                    </div>
                    <canvas id="adaptarse" height="200"></canvas>
                </div>
                <div class="col">
                    <div class="card shadow card-total">
                        <h6 class="text-center">¿Qué es lo que más te gusta de trabajar en BH TRADE MARKET? (Puedes seleccionar dos opciones)</h6>
                    </div>
                    <canvas id="gustar" height="200"></canvas>
                </div>
                <div class="col">
                    <div class="card shadow card-total">
                        <h6 class="text-center">¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)</h6>
                    </div>
                    <canvas id="gustar" height="200"></canvas>
                </div>
                <div class="col">
                    <div class="card shadow card-total">
                        <h6 class="text-center">¿Qué es lo que menos te gusta de trabajar en la organización?  (puedes seleccionar dos opciones)</h6>
                    </div>
                    <canvas id="gustar" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="sweetalert2.min.css">
    <script>
       document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('edades').getContext('2d');

            var nombres=@json($edades);
            var datos = @json($Resultado);

            var backgroundColors = [];
            var borderColors = [];

            for (var i = 0; i < nombres.length; i++) {
                var colorIndex = i % 5;
                backgroundColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8'][colorIndex]);
                borderColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8', '#FFADAD'][colorIndex]);
            }

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:nombres,
                    datasets: [{
                        label: 'Edades',
                        data: datos,
                        backgroundColor:backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {}
            });
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('Area').getContext('2d');

            var nombres=@json($areas);
            var datos = @json($Resultado_area);

            var backgroundColors = [];
            var borderColors = [];

            for (var i = 0; i < nombres.length; i++) {
                var colorIndex = i % 5;
                backgroundColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8'][colorIndex]);
                borderColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8', '#FFADAD'][colorIndex]);
            }

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:nombres,
                    datasets: [{
                        label: 'Areas',
                        data: datos,
                        backgroundColor:backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {}
            });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('tiempo').getContext('2d');

            var nombres=@json($tiempo);
            var datos = @json($Resultado_tiempo);

            var backgroundColors = [];
            var borderColors = [];

            for (var i = 0; i < nombres.length; i++) {
                var colorIndex = i % 5;
                backgroundColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8'][colorIndex]);
                borderColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8', '#FFADAD'][colorIndex]);
            }

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:nombres,
                    datasets: [{
                        label: 'Tiempo',
                        data: datos,
                        backgroundColor:backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {}
            });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('empresa').getContext('2d');

            var nombres=@json($empresa);
            var datos = @json($Resultado_empresa);

            var backgroundColors = [];
            var borderColors = [];

            for (var i = 0; i < nombres.length; i++) {
                var colorIndex = i % 5;
                backgroundColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8'][colorIndex]);
                borderColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8', '#FFADAD'][colorIndex]);
            }

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:nombres,
                    datasets: [{
                        label: 'Tiempo',
                        data: datos,
                        backgroundColor:backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {}
            });
    });
    document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('adaptarse').getContext('2d');

            var nombres=@json($opciones);
            var datos = @json($Resultado_opcion);

            var backgroundColors = [];
            var borderColors = [];

            for (var i = 0; i < nombres.length; i++) {
                var colorIndex = i % 5;
                backgroundColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8'][colorIndex]);
                borderColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8', '#FFADAD'][colorIndex]);
            }

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:nombres,
                    datasets: [{
                        label: 'Tiempo',
                        data: datos,
                        backgroundColor:backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {}
            });
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('gustar').getContext('2d');

            var nombres=@json($gustar);
            var datos = @json($Resultado_gustar);
            var backgroundColors = [];
            var borderColors = [];

            for (var i = 0; i < nombres.length; i++) {
                var colorIndex = i % 5;
                backgroundColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8'][colorIndex]);
                borderColors.push(['#00539C', '#EEA47F', '#EE7F7F', '#006EAD', '#F5C2A8', '#FFADAD'][colorIndex]);
            }

            var chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels:nombres,
                    datasets: [{
                        label: 'Tiempo',
                        data: datos,
                        backgroundColor:backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {}
            });
    });
    </script>

</body>

</html>
