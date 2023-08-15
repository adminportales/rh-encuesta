<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Estadisticas</title>
</head>

<style>
    body {
        background-color: rgb(211, 246, 255)
    }
</style>

<body class="antialiased">
    
    <div class="container mt-4">
        <div class="row">           
            <div class="col-md-9 mx-auto text-center">
                <h1 class="">RESULTADOS CLIMA LABORAR</h1>
               
            </div>
        </div>
    </div>
    {{-- BH trade market --}}
    <div class="container mt-2">
        <div class="row justify-content-center">         
                <h2>BH-TRADE MARKET</h2>
        <div class="col mt-4">
            <div class="card shadow card-total">                
                <a name="" id="" class="btn btn-ligth " href="{{route('export')}}" role="button"> <img src="{{ asset('img/Microsoft_Office_Excel_(2019–present).svg.png') }}" width="50px" height="50px" alt=""></a>
            </div>
        </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿A qué rango de edad perteneces?</h6>
                </div>
                <canvas id="edades" height="150"></canvas>
            </div>
            {{-- <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cuál es tu genero? </h6>
                </div>
                <canvas id="genero" height="200"></canvas>
            </div> --}}
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
                    <h6 class="text-center">¿Cómo calificarías tu experiencia trabajando dentro de BH TRADE MARKET? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)</h6>
                </div>
                <canvas id="experiencia" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Alguna vez has sentido que te delegan actividades que no tienen que ver con tus funciones?</h6>
                </div>
                <canvas id="actividades" height="200"></canvas>
            </div>
    
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Las actividades que desempeñas en tu puesto son de tu agrado?</h6>
                </div>
                <canvas id="agrado" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que BH TRADE MARKET te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?</h6>
                </div>
                <canvas id="herramientas" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Cómo calificarías las instalaciones de tu organización?</h6>
                </div>
                <canvas id="instalaciones" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Crees que BH TRADE MARKET te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente?</h6>
                </div>
                <canvas id="oportunidades" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Piensas que BH TRADE MARKET considera a cada colaborador un factor clave para el éxito de la organización?</h6>
                </div>
                <canvas id="colaborador" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes comprometido con el éxito de tu empresa?</h6>
                </div>
                <canvas id="compromiso" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Se reconocen los logros de los colaboradores en tu empresa?</h6>
                </div>
                <canvas id="logros" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?</h6>
                </div>
                <canvas id="beneficios" height="200"></canvas>
            </div>
            
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te ves a ti mismo trabajando en BH TRADE MARKET dentro de?</h6>
                </div>
                <canvas id="trabajando" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es tu relación con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="relacion" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?</h6>
                </div>
                <canvas id="integracion" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?</h6>
                </div>
                <canvas id="23" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?</h6>
                </div>
                <canvas id="24" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?</h6>
                </div>
                <canvas id="25" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tus compañeros de trabajo?</h6>
                </div>
                <canvas id="26" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es la relación con tu jefe?</h6>
                </div>
                <canvas id="27" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tu jefe?</h6>
                </div>
                <canvas id="28" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes escuchado por la Dirección de BH TRADE MARKET? </h6>
                </div>
                <canvas id="29" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has tenido algún problema con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="30" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la misión y visión de BH TRADE MARKET?</h6>
                </div>
                <canvas id="31" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces el código de ética de BH TRADE MARKET?</h6>
                </div>
                <canvas id="32" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces los valores organizacionales de BH TRADE MARKET?</h6>
                </div>
                <canvas id="33" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la línea de denuncias internas de BH TRADE MARKET?</h6>
                </div>
                <canvas id="34" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que se comete algún tipo de injusticia en tu trabajo?</h6>
                </div>
                <canvas id="35" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?</h6>
                </div>
                <canvas id="36" height="200"></canvas>
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
                    <h6 class="text-center">Al ingresar a trabajar en BH TRADE MARKET o cuando has cambiado de posición ¿Fue difícil adaptarte?</h6>
                </div>
                <canvas id="43" height="200"></canvas>
            </div>
                          
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo calificarías tu experiencia trabajando dentro de BH TRADE MARKET? (Tomando en cuenta que en tu trabajo pasas la mayor parte de tu vida, aprendes cosas nuevas y te llevas experiencias para toda la vida)</h6>
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
                    <h6 class="text-center">¿Crees que BH TRADE MARKET te brinda las herramientas necesarias para desenvolver tus actividades con facilidad?</h6>
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
                    <h6 class="text-center"> ¿Crees que BH TRADE MARKET te brinda oportunidades de progresar, crecer y desarrollarte profesionalmente?</h6>
                </div>
                <canvas id="51" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center"> ¿Piensas que BH TRADE MARKET considera a cada colaborador un factor clave para el éxito de la organización?</h6>
                </div>
                <canvas id="52" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes comprometido con el éxito de tu empresa?</h6>
                </div>
                <canvas id="53" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Se reconocen los logros de los colaboradores en tu empresa?</h6>
                </div>
                <canvas id="54" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que los beneficios/sueldos están a la par con los de otras organizaciones?</h6>
                </div>
                <canvas id="55" height="200"></canvas>
            </div>
            
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te ves a ti mismo trabajando en BH TRADE MARKET dentro de?</h6>
                </div>
                <canvas id="56" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es tu relación con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="57" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo sientes que es la integración con tus compañeros a la hora de trabajar en equipo?</h6>
                </div>
                <canvas id="58" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Alguna vez te has sentido excluido por parte de tu equipo de trabajo?</h6>
                </div>
                <canvas id="59" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?</h6>
                </div>
                <canvas id="60" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?</h6>
                </div>
                <canvas id="61" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tus compañeros de trabajo?</h6>
                </div>
                <canvas id="62" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es la relación con tu jefe?</h6>
                </div>
                <canvas id="63" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tu jefe?</h6>
                </div>
                <canvas id="64" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes escuchado por la Dirección de BH TRADE MARKET? </h6>
                </div>
                <canvas id="65" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has tenido algún problema con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="66" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la misión y visión de BH TRADE MARKET?</h6>
                </div>
                <canvas id="67" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces el código de ética de BH TRADE MARKET?</h6>
                </div>
                <canvas id="68" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces los valores organizacionales de BH TRADE MARKET?</h6>
                </div>
                <canvas id="69" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la línea de denuncias internas de BH TRADE MARKET?</h6>
                </div>
                <canvas id="70" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que se comete algún tipo de injusticia en tu trabajo?</h6>
                </div>
                <canvas id="71" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?</h6>
                </div>
                <canvas id="72" height="200"></canvas>
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
            {{-- 76 - 112 --}}
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
                <canvas id="96" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Para ti, ¿Qué tan motivante es trabajar con tu jefe(a)?</h6>
                </div>
                <canvas id="97" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">Alguna vez te has sentido humillado o amenazado por alguno de tus compañeros?</h6>
                </div>
                <canvas id="98" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tus compañeros de trabajo?</h6>
                </div>
                <canvas id="99" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Cómo es la relación con tu jefe?</h6>
                </div>
                <canvas id="100" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Sientes que puedes confiar en tu jefe?</h6>
                </div>
                <canvas id="101" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Te sientes escuchado por la Dirección de BH TRADE MARKET? </h6>
                </div>
                <canvas id="102" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has tenido algún problema con tus compañeros de trabajo?</h6>
                </div>
                <canvas id="103" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la misión y visión de BH TRADE MARKET?</h6>
                </div>
                <canvas id="104" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces el código de ética de BH TRADE MARKET?</h6>
                </div>
                <canvas id="105" height="200"></canvas>
            </div>
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces los valores organizacionales de BH TRADE MARKET?</h6>
                </div>
                <canvas id="106" height="200"></canvas>
            </div>
    
            <div class="col">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Conoces la línea de denuncias internas de BH TRADE MARKET?</h6>
                </div>
                <canvas id="107" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Crees que se comete algún tipo de injusticia en tu trabajo?</h6>
                </div>
                <canvas id="108" height="200"></canvas>
            </div>
            <div class="col-4">
                <div class="card shadow card-total">
                    <h6 class="text-center">¿Has sido testigo de algún acto que atente contra nuestros valores y/o los colaboradores?</h6>
                </div>
                <canvas id="109" height="200"></canvas>
            </div>
            
            
        </div>
    </div>

    {{-- Tm57 --}}


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
        var ctx = document.getElementById('Area').getContext('2d');
            var nombres=@json($areas);
            var datos = @json($Resultado3);

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
        var ctx = document.getElementById('tiempo').getContext('2d');
            var nombres=@json($tiempos);
            var datos = @json($Resultado4);

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
        var ctx = document.getElementById('tiempo').getContext('2d');
            var nombres=@json($tiempos);
            var datos = @json($Resultado4);

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
        var ctx = document.getElementById('empresa').getContext('2d');
            var nombres=@json($bh);
            var datos = @json($Resultado5);

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
        var ctx = document.getElementById('adaptarse').getContext('2d');
            var nombres=@json($adaptacion);
            var datos = @json($Resultado6);

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
        var ctx = document.getElementById('experiencia').getContext('2d');
            var nombres=@json($experiencias);
            var datos = @json($Resultado9);

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
        var ctx = document.getElementById('actividades').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado10);

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
        var ctx = document.getElementById('agrado').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado11);

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
        var ctx = document.getElementById('herramientas').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado12);

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
        var ctx = document.getElementById('instalaciones').getContext('2d');

            var nombres=@json($opciones_13_1);
            var datos = @json($Resultado13);

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
        var ctx = document.getElementById('oportunidades').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado15);

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
        var ctx = document.getElementById('colaborador').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado16);

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
        var ctx = document.getElementById('compromiso').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado17);

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
        var ctx = document.getElementById('logros').getContext('2d');

            var nombres=@json($opciones_12);
            var datos = @json($Resultado18);

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
        var ctx = document.getElementById('beneficios').getContext('2d');

            var nombres=@json($opciones_13);
            var datos = @json($Resultado19);

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
        var ctx = document.getElementById('trabajando').getContext('2d');

            var nombres=@json($tiempos_trabajando);
            var datos = @json($Resultado20);

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
        var ctx = document.getElementById('relacion').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado21);

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
        var ctx = document.getElementById('integracion').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado22);

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
        var ctx = document.getElementById('23').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado23);

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
        var ctx = document.getElementById('24').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado24);

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
        var ctx = document.getElementById('25').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado25);

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
        var ctx = document.getElementById('26').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado26);

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
        var ctx = document.getElementById('27').getContext('2d');

            var nombres=@json($opciones_21);
            var datos = @json($Resultado27);

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
        var ctx = document.getElementById('28').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado28);

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
        var ctx = document.getElementById('29').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado29);

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
        var ctx = document.getElementById('30').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado30);

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
        var ctx = document.getElementById('31').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado31);

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
        var ctx = document.getElementById('32').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado32);

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
        var ctx = document.getElementById('33').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado33);

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
        var ctx = document.getElementById('34').getContext('2d');

            var nombres=@json($opciones_3);
            var datos = @json($Resultado34);

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
        var ctx = document.getElementById('35').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado35);

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
        var ctx = document.getElementById('36').getContext('2d');

            var nombres=@json($opciones_sn);
            var datos = @json($Resultado36);

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
        var ctx = document.getElementById('51').getContext('2d');

            var nombres=@json($actividades);
            var datos = @json($Resultado51);

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
        var ctx = document.getElementById('53').getContext('2d');

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
        var ctx = document.getElementById('54').getContext('2d');

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
        var ctx = document.getElementById('55').getContext('2d');

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
        var ctx = document.getElementById('56').getContext('2d');

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
        var ctx = document.getElementById('56').getContext('2d');

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
        var ctx = document.getElementById('57').getContext('2d');

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
        var ctx = document.getElementById('58').getContext('2d');

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

            var nombres=@json($opciones_siempre);
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


    </script>    
</body>
</html>
