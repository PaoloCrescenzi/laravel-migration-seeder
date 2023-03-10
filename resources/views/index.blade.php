<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
    @vite('resources/js/app.js')

</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Treni in partenza oggi</h1>
        </div>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-6 p-5">
                    <div class="card text-center">
                        <h3 class="pt-3">Azienda: {{$train->name}}</h3>
                        <h5>Stazione di partenza:</h5><span>{{$train->stazione_di_partenza}}</span>
                        <br>
                        <h5>Stazione di arrivo:</h5><span>{{$train->stazione_di_arrivo}}</span>
                        <br>
                        <h5>orario di partenza:</h5><span>{{$train->orario_di_partenza}}</span>
                        <br>
                        <h5>orario di arrivo:</h5><span>{{$train->orario_di_arrivo}}</span>
                        <br>
                        <h5>Codice treno:</h5><span>{{$train->codice_treno}}</span>
                        <br>
                        <h5>Numero di carrozze:</h5><span>{{$train->numero_carrozze}}</span>                        
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>