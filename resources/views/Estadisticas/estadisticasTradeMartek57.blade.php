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
    <title>Estadisticas Trade Market 57</title>
</head>

<style>
    body {
        background-color: rgb(211, 246, 255)
    }
</style>
<body>
    <div class="container mt-4">
        <div class="row">           
            <div class="col-md-9 mx-auto text-center">
                <h1 class="">RESULTADOS CLIMA LABORAR</h1>
               
            </div>
        </div>
    </div>
     {{-- promo life --}}
     <div class="container mt-2">
        <div class="row justify-content-center">
            <h2>PROMO LIFE</h2>
            <div class="col mt-4">
                <div class="card shadow card-total">                
                    <a name="" id="" class="btn btn-ligth " href="{{route('export.promolife')}}" role="button"> <img src="{{ asset('img/Microsoft_Office_Excel_(2019–present).svg.png') }}" width="50px" height="50px" alt=""></a>
                </div>
            </div>
            
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿A qué rango de edad perteneces?</h6>
                </div>
                <canvas id="113" height="150"></canvas>
            </div>
          
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Àrea en la que te desenvuelves actualmente: </h6>
                </div>
                <canvas id="115" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">
                        ¿Cuánto tiempo llevas trabajando en la organización?</h6>
                </div>
                <canvas id="116" height="200"></canvas>
            </div>
            <div class="col ">
                <div class="card shadow card-total">
                    <h6 class="text-center">Al ingresar a trabajar en PROMO LIFE o cuando has cambiado de posición ¿Fue difícil adaptarte?</h6>
                </div>
                <canvas id="117" height="200"></canvas>
            </div>
                          
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo calificarías tu experiencia trabajando dentro de PROMO LIFE? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)</h6>
                </div>
                <canvas id="120" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones?</h6>
                </div>
                <canvas id="121" height="200"></canvas>
            </div>
    
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Las actividades que desempeñas en tu puesto son de tu agrado?</h6>
                </div>
                <canvas id="122" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que PROMO LIFE te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?</h6>
                </div>
                <canvas id="123" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Cómo calificarías las instalaciones de tu organización?</h6>
                </div>
                <canvas id="124" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Crees que PROMO LIFE te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente?</h6>
                </div>
                <canvas id="126" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Piensas que PROMO LIFE considera a cada colaborador un factor clave para el éxito de la organización?</h6>
                </div>
                <canvas id="127" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes comprometido con el éxito de tu empresa?</h6>
                </div>
                <canvas id="128" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Se reconocen los logros de los colaboradores en tu empresa?</h6>
                </div>
                <canvas id="129" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?</h6>
                </div>
                <canvas id="130" height="200"></canvas>
            </div>
            
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te ves a ti mismo trabajando en PROMO LIFE dentro de?</h6>
                </div>
                <canvas id="131" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es tu relación con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="132" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?</h6>
                </div>
                <canvas id="133" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?</h6>
                </div>
                <canvas id="134" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?</h6>
                </div>
                <canvas id="135" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?</h6>
                </div>
                <canvas id="136" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tus compañeros de trabajo?</h6>
                </div>
                <canvas id="137" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es la relación con tu jefe?</h6>
                </div>
                <canvas id="138" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tu jefe?</h6>
                </div>
                <canvas id="139" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes escuchado por la Dirección de PROMO LIFE? </h6>
                </div>
                <canvas id="140" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has tenido algún problema con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="141" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la misión y visión de PROMO LIFE?</h6>
                </div>
                <canvas id="142" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces el código de ética de PROMO LIFE?</h6>
                </div>
                <canvas id="143" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces los valores organizacionales de PROMO LIFE?</h6>
                </div>
                <canvas id="144" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la línea de denuncias internas de PROMO LIFE?</h6>
                </div>
                <canvas id="145" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que se comete algún tipo de injusticia en tu trabajo?</h6>
                </div>
                <canvas id="146" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?</h6>
                </div>
                <canvas id="147" height="200"></canvas>
            </div>
            
        </div>
    </div>



    <script>
         document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('113').getContext('2d');

            var nombres=@json($edades);
            var datos = @json($Resultado113);

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
        var ctx = document.getElementById('115').getContext('2d');

            var nombres=@json($areas);
            var datos = @json($Resultado115);

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
        var ctx = document.getElementById('116').getContext('2d');

            var nombres=@json($tiempos);
            var datos = @json($Resultado116);

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
        var ctx = document.getElementById('117').getContext('2d');

            var nombres=@json($adaptacion);
            var datos = @json($Resultado117);

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
        var ctx = document.getElementById('120').getContext('2d');

            var nombres=@json($experiencias);
            var datos = @json($Resultado120);

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
        var ctx = document.getElementById('121').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado121);

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
        var ctx = document.getElementById('122').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado122);

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
        var ctx = document.getElementById('123').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado123);

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
        var ctx = document.getElementById('124').getContext('2d');

            var nombres=@json($opciones_13_1);
            var datos = @json($Resultado124);

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
        var ctx = document.getElementById('125').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado125);

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
        var ctx = document.getElementById('126').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado126);

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
        var ctx = document.getElementById('127').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado127);

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
        var ctx = document.getElementById('128').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado128);

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
        var ctx = document.getElementById('129').getContext('2d');

            var nombres=@json($opciones_13);
            var datos = @json($Resultado129);

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
        var ctx = document.getElementById('130').getContext('2d');

            var nombres=@json($tiempos_trabajando);
            var datos = @json($Resultado130);

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
        var ctx = document.getElementById('131').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado131);

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
        var ctx = document.getElementById('132').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado132);

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
        var ctx = document.getElementById('133').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado133);

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
        var ctx = document.getElementById('134').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado134);

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
        var ctx = document.getElementById('135').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado135);

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
        var ctx = document.getElementById('136').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado136);

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
        var ctx = document.getElementById('137').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado137);

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
        var ctx = document.getElementById('138').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado138);

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
        var ctx = document.getElementById('139').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado139);

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
        var ctx = document.getElementById('140').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado140);

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
        var ctx = document.getElementById('141').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado141);

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
        var ctx = document.getElementById('142').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado142);

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
        var ctx = document.getElementById('143').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado143);

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
        var ctx = document.getElementById('144').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado144);

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
        var ctx = document.getElementById('145').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado145);

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
        var ctx = document.getElementById('146').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado146);

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
        var ctx = document.getElementById('147').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado147);

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