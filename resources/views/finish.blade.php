<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">        
        <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Encuesta enviada</title>
</head>

<style>
    body {
        background-color: rgb(211, 246, 255)
    }
</style>
<body class="antialiased">

    <div class="container mt-4">
        <div class="row ">          
            <div class="col-7 mx-auto col-md-9">
                <h1 class="text-center">EVALUACIÓN CLIMA LABORAL 2023</h1>
            </div>
        </div>
        <hr>
        <div class="col-7 mx-auto card shadow rounded-3">
            <div class="card-body">
                <div class="row">  
                    <div class="col d-flex justify-content-center">
                        <img src="{{asset('img/bhtrade.png') }}" height="50px" width="50px" alt="">
                    </div>        
                    <div class="col">
                        <img src="{{asset('img/LOGOPROMODREAMS.jpg') }}" height="50px" width="50px" alt="">
                    </div>
                    <div class="col">
                        <img src="{{asset('img/promolife.png') }}" height="50px" width="50px" alt="">                        
                    </div>
                    
                    <div class="col">
                        <img src="{{asset('img/trademarket57.png') }}" height="50px" width="50px" alt="">                        
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-2">
                        <h1 class="card-title">Encuesta enviada correctamente. !Gracias!</h1>                     
                    </div>
            </div>                                                   
            </div>
          </div>        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>
</html>
