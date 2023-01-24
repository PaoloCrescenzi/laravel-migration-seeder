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
                <div class="col-3 p-5">
                    <div class="card">

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>