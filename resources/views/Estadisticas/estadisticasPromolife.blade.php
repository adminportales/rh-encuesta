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
    <title>Estadisticas Promo life</title>
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
                <canvas id="39" height="150"></canvas>
            </div>
          
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Àrea en la que te desenvuelves actualmente: </h6>
                </div>
                <canvas id="41" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">
                        ¿Cuánto tiempo llevas trabajando en la organización?</h6>
                </div>
                <canvas id="42" height="200"></canvas>
            </div>
            <div class="col ">
                <div class="card shadow card-total">
                    <h6 class="text-center">Al ingresar a trabajar en PROMO LIFE o cuando has cambiado de posición ¿Fue difícil adaptarte?</h6>
                </div>
                <canvas id="43" height="200"></canvas>
            </div>
                          
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo calificarías tu experiencia trabajando dentro de PROMO LIFE? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)</h6>
                </div>
                <canvas id="46" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones?</h6>
                </div>
                <canvas id="47" height="200"></canvas>
            </div>
    
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Las actividades que desempeñas en tu puesto son de tu agrado?</h6>
                </div>
                <canvas id="48" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que PROMO LIFE te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?</h6>
                </div>
                <canvas id="49" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Cómo calificarías las instalaciones de tu organización?</h6>
                </div>
                <canvas id="50" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Crees que PROMO LIFE te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente?</h6>
                </div>
                <canvas id="52" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Piensas que PROMO LIFE considera a cada colaborador un factor clave para el éxito de la organización?</h6>
                </div>
                <canvas id="53" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes comprometido con el éxito de tu empresa?</h6>
                </div>
                <canvas id="54" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Se reconocen los logros de los colaboradores en tu empresa?</h6>
                </div>
                <canvas id="55" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?</h6>
                </div>
                <canvas id="56" height="200"></canvas>
            </div>
            
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te ves a ti mismo trabajando en PROMO LIFE dentro de?</h6>
                </div>
                <canvas id="57" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es tu relación con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="58" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?</h6>
                </div>
                <canvas id="59" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?</h6>
                </div>
                <canvas id="60" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?</h6>
                </div>
                <canvas id="61" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?</h6>
                </div>
                <canvas id="62" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tus compañeros de trabajo?</h6>
                </div>
                <canvas id="63" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es la relación con tu jefe?</h6>
                </div>
                <canvas id="64" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tu jefe?</h6>
                </div>
                <canvas id="65" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes escuchado por la Dirección de PROMO LIFE? </h6>
                </div>
                <canvas id="66" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has tenido algún problema con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="67" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la misión y visión de PROMO LIFE?</h6>
                </div>
                <canvas id="68" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces el código de ética de PROMO LIFE?</h6>
                </div>
                <canvas id="69" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces los valores organizacionales de PROMO LIFE?</h6>
                </div>
                <canvas id="70" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la línea de denuncias internas de PROMO LIFE?</h6>
                </div>
                <canvas id="71" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que se comete algún tipo de injusticia en tu trabajo?</h6>
                </div>
                <canvas id="72" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?</h6>
                </div>
                <canvas id="73" height="200"></canvas>
            </div>
            
        </div>
    </div>



    <script>
         document.addEventListener('DOMContentLoaded', function() {
        // Obtén el contexto del canvas
        var ctx = document.getElementById('39').getContext('2d');

            var nombres=@json($edades);
            var datos = @json($Resultado39);

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
        var ctx = document.getElementById('41').getContext('2d');

            var nombres=@json($areas);
            var datos = @json($Resultado41);

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
        var ctx = document.getElementById('42').getContext('2d');

            var nombres=@json($tiempos);
            var datos = @json($Resultado42);

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
        var ctx = document.getElementById('43').getContext('2d');

            var nombres=@json($adaptacion);
            var datos = @json($Resultado43);

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
        var ctx = document.getElementById('46').getContext('2d');

            var nombres=@json($experiencias);
            var datos = @json($Resultado46);

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
        var ctx = document.getElementById('47').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado47);

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
        var ctx = document.getElementById('48').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado48);

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
        var ctx = document.getElementById('49').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado49);

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
        var ctx = document.getElementById('50').getContext('2d');

            var nombres=@json($opciones_13_1);
            var datos = @json($Resultado50);

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
        var ctx = document.getElementById('52').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado52);

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
        var ctx = document.getElementById('53').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado53);

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
        var ctx = document.getElementById('54').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado54);

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
        var ctx = document.getElementById('55').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado55);

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
        var ctx = document.getElementById('56').getContext('2d');

            var nombres=@json($opciones_13);
            var datos = @json($Resultado56);

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
        var ctx = document.getElementById('57').getContext('2d');

            var nombres=@json($tiempos_trabajando);
            var datos = @json($Resultado57);

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
        var ctx = document.getElementById('58').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado58);

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
        var ctx = document.getElementById('59').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado59);

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
        var ctx = document.getElementById('60').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado60);

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
        var ctx = document.getElementById('61').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado62);

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
        var ctx = document.getElementById('62').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado63);

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
        var ctx = document.getElementById('63').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado64);

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
        var ctx = document.getElementById('64').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado65);

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
        var ctx = document.getElementById('65').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado66);

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
        var ctx = document.getElementById('66').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado67);

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
        var ctx = document.getElementById('67').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado68);

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
        var ctx = document.getElementById('68').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado69);

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
        var ctx = document.getElementById('69').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado70);

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
        var ctx = document.getElementById('70').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado71);

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
        var ctx = document.getElementById('71').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado72);

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
        var ctx = document.getElementById('72').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado73);

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
        var ctx = document.getElementById('73').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado73);

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