<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Roboto+Slab&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>evaluaciòn clima laboral</title>
</head>
<style>
    body {
        background-color: rgb( 210, 248, 255)
    }
    p{
       
        font-family: 'Roboto Slab', serif;
        font-size: 1rem;
        text-justify:inherit;
    }
    h1{
        font-family: 'Roboto Slab', serif;
    }

    .preguntas .card-header{        
        font-family: font-family: 'Roboto Slab', serif;
        font-weight: bold;
    }
</style>
<body class="antialiased">

    <div class="container mt-4">       
        <div class="col-7 col-md mx-auto">
            <div class="row mb-2">
                <div class="col-4 col-md-2">
                    <img src="{{ asset('img/LOGOPROMODREAMS.jpg') }}" alt="" width="150" height="100">
                </div>
                <div class="col">
                    <h1 class="text-center">EVALUACIÓN CLIMA LABORAL 2023</h1>
                </div>                
            </div>            
            <section class="bg-white p-4 rounded shadow-lg">                                
                <p >
                    ¡Bienvenido(a) estimado(a) colaborador(a) de <span class="fw-bold">PROMO ZALE SA DE CV!</span>
                </p>
                <br>
                <p class="text-justify">El siguiente cuestionario tiene como objetivo conocer que tan satisfechos (as) se sienten nuestros (as) colaboradores (as) en su posición actual dentro de esta empresa y que Dirección General pueda conocer el sentir y la opinión cada uno de ustedes para tomar decisiones que ayuden al desarrollo personal y profesional de sus equipos de trabajo.</p>
                <br>
                <p>
                    Pedimos de tu valioso apoyo con tu respuesta de la manera más honesta y objetiva, recordando que no existen respuestas buenas o malas, ya que buscamos mejorar de manera continua las condiciones laborales de <b>PROMO ZALE.</b>
                </p>
                <br>
                <p>
                    <u>Este cuestionario será respondido de manera anónima y toda la información recopilada será utilizada con fines estadísticos.</u>
                </p>

                <p>
                    Te recomendamos leer cuidadosamente cada pregunta y no dejar ninguna pregunta sin responder.                                     
                </p>

                <b>¡Muchas gracias por tu apoyo!</b>
            </section>
        </div>

        <div class="col-7 mx-auto mt-2">
            @error('question_id.*')
            <div class="alert alert-danger"><span style="color: red">Faltaron campos por llenar. Intentalo de nuevo</span></div>
            @enderror
        </div>       

        <section class=" preguntas mt-4">
            <form action="{{ route('promosale.save') }}" method="POST">
                @csrf
                @foreach ($preguntas as $pregunta)
                    @php
                        $opciones = json_decode($pregunta->options);
                    @endphp
                    @switch($pregunta->type)                       
                        @case('Unica')
                            <div class="col-7 mx-auto card mb-3">
                                <div id="pregunta" class="card-header bg-ligth"">
                                    {{ $pregunta->question }} <span style="color: red">*</span>
                                </div>
                                <div class="card-title">
                                    <div class="form-check">
                                        @if ($opciones !== null)
                                            <div class="container">
                                                <div class="row">
                                                    @foreach ($opciones as $opcion)                                                        
                                                            <label>
                                                                <input class="mt-3" type="radio"
                                                                    name="question_id[{{ $pregunta->id }}][]"
                                                                    value="{{ $opcion }}">
                                                                {{ $opcion }} 
                                                            </label>
                                                        
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </div>
    
                                </div>
                            </div>
                        @break
    
                        @case('Multiple')
                            <div class="col-7 mx-auto card mb-3 ">
                                <div id="pregunta" class="card-header bg-ligth fw-bold">
                                    {{ $pregunta->question }} <span style="color: red">*</span>
                                </div>
                                <div class="card-title">
                                    <div class="form-check">
                                        @if ($opciones !== null)
                                            <div class="container">
                                                <div class="row">
                                                    @foreach ($opciones as $opcion)                                                      
                                                            <label>
                                                                <input class="mt-3" type="checkbox"
                                                                    name="question_id[{{ $pregunta->id }}][]"
                                                                    value="{{ $opcion }}" onclick="limitarCasillas(this)"
                                                                    data-question-id="{{ $pregunta->id }}">
                                                                {{ $opcion }}
                                                            </label>                                                        
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @break
    
                        @case('Libre')
                            <div class="col-7 mx-auto card mb-3">
                                <div class="card-header bg-ligth fw-bold">
                                    {{ $pregunta->question }}
                                </div>
                                <div class="card-title">
                                    <div class="form-check">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-11">
                                                    <input class="mt-4 form-control rounded"
                                                        type="text"name="question_id[{{ $pregunta->id }}][]"
                                                        placeholder="Escribe tu respuesta" maxlength="255">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @break
                        @default
                    @endswitch
                @endforeach
                   
                    <div class="container">
                        <x-button-save>                            
                        </x-button-save>                                    
                    </div>
        </div>
        </form>
        </section>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        function limitarCasillas(checkbox) {
            // Obtener todas las casillas de verificación en el grupo
            var checkboxes = document.querySelectorAll('input[name^="question_id[' + checkbox.dataset.questionId + '][]"]');

            // Contar las casillas seleccionadas
            var seleccionadas = 0;
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i].checked) {
                    seleccionadas++;
                }
            }

            // Permitir hasta dos casillas seleccionadas
            if (seleccionadas > 2) {
                checkbox.checked = false; // Desmarcar la casilla que se acaba de marcar
            }
        }
    </script>
</body>
</html>
