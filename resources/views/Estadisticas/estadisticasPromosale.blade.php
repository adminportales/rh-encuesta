<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Estadisticas Promo zale</title>
</head>
<body>
    <style>
        body {
            background-color: rgb(211, 246, 255)
        }
    </style>

    <div class="container mt-4">
        <div class="row">           
            <div class="col-md-9 mx-auto text-center">
                <h1 class="">RESULTADOS CLIMA LABORAR</h1>
            
            </div>
        </div>
    </div>

        {{-- Promo sale --}}
    <div class="container mt-2">
        <div class="row justify-content-center">
            <h2>PROMO ZALE</h2>
            <div class="col mt-4">
                <div class="card shadow card-total">                
                    <a name="" id="" class="btn btn-ligth " href="{{route('export.promolife')}}" role="button"> <img src="{{ asset('img/Microsoft_Office_Excel_(2019–present).svg.png') }}" width="50px" height="50px" alt=""></a>
                </div>
            </div>
            
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿A qué rango de edad perteneces?</h6>
                </div>
                <canvas id="76" height="150"></canvas>
            </div>
          
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Àrea en la que te desenvuelves actualmente: </h6>
                </div>
                <canvas id="78" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">
                        ¿Cuánto tiempo llevas trabajando en la organización?</h6>
                </div>
                <canvas id="79" height="200"></canvas>
            </div>
            <div class="col ">
                <div class="card shadow card-total">
                    <h6 class="text-center">Al ingresar a trabajar en BH TRADE MARKET o cuando has cambiado de posición ¿Fue difícil adaptarte?</h6>
                </div>
                <canvas id="80" height="200"></canvas>
            </div>
                          
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo calificarías tu experiencia trabajando dentro de BH TRADE MARKET? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)</h6>
                </div>
                <canvas id="83" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones?</h6>
                </div>
                <canvas id="84" height="200"></canvas>
            </div>
    
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Las actividades que desempeñas en tu puesto son de tu agrado?</h6>
                </div>
                <canvas id="85" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que BH TRADE MARKET te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?</h6>
                </div>
                <canvas id="86" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Cómo calificarías las instalaciones de tu organización?</h6>
                </div>
                <canvas id="87" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Crees que BH TRADE MARKET te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente?</h6>
                </div>
                <canvas id="89" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Piensas que BH TRADE MARKET considera a cada colaborador un factor clave para el éxito de la organización?</h6>
                </div>
                <canvas id="90" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes comprometido con el éxito de tu empresa?</h6>
                </div>
                <canvas id="91" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Se reconocen los logros de los colaboradores en tu empresa?</h6>
                </div>
                <canvas id="92" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?</h6>
                </div>
                <canvas id="93" height="200"></canvas>
            </div>
            
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te ves a ti mismo trabajando en BH TRADE MARKET dentro de?</h6>
                </div>
                <canvas id="94" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es tu relación con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="95" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?</h6>
                </div>
                <canvas id="96" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?</h6>
                </div>
                <canvas id="97" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?</h6>
                </div>
                <canvas id="98" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?</h6>
                </div>
                <canvas id="99" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tus compañeros de trabajo?</h6>
                </div>
                <canvas id="100" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es la relación con tu jefe?</h6>
                </div>
                <canvas id="101" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tu jefe?</h6>
                </div>
                <canvas id="102" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes escuchado por la Dirección de BH TRADE MARKET? </h6>
                </div>
                <canvas id="103" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has tenido algún problema con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="104" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la misión y visión de BH TRADE MARKET?</h6>
                </div>
                <canvas id="105" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces el código de ética de BH TRADE MARKET?</h6>
                </div>
                <canvas id="106" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces los valores organizacionales de BH TRADE MARKET?</h6>
                </div>
                <canvas id="107" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la línea de denuncias internas de BH TRADE MARKET?</h6>
                </div>
                <canvas id="108" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que se comete algún tipo de injusticia en tu trabajo?</h6>
                </div>
                <canvas id="109" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?</h6>
                </div>
                <canvas id="110" height="200"></canvas>
            </div>
            
        </div>
    </div>

    <script>
         //PROMO ZALE
    document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('76').getContext('2d');

            var nombres=@json($edades);
            var datos = @json($Resultado76);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('78').getContext('2d');

            var nombres=@json($areas);
            var datos = @json($Resultado78);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('79').getContext('2d');

            var nombres=@json($tiempos);
            var datos = @json($Resultado79);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('80').getContext('2d');

            var nombres=@json($adaptacion);
            var datos = @json($Resultado80);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('83').getContext('2d');

            var nombres=@json($experiencias);
            var datos = @json($Resultado83);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('84').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado84);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('85').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado85);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('86').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado86);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('87').getContext('2d');

            var nombres=@json($opciones_13_1);
            var datos = @json($Resultado87);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('89').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado89);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('90').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado90);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('91').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado91);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('92').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado92);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('93').getContext('2d');

            var nombres=@json($opciones_13);
            var datos = @json($Resultado93);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('94').getContext('2d');

            var nombres=@json($tiempos_trabajando);
            var datos = @json($Resultado94);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('95').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado95);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('96').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado96);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('97').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado97);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('98').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado98);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('99').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado99);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('100').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado100);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('101').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado101);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('102').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado102);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('103').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado90);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('104').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado104);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('105').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado105);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('106').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado106);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('107').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado90);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('108').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado108);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('109').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado109);

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
                        label: 'Personas',
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
        var ctx = document.getElementById('110').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado110);

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
                        label: 'Personas',
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