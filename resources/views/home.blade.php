<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <main>
        {{$date}}
        <section id="trains" class="container">
            <article class="row border border-dark fw-bolder">
                <div class="col-1">
                    CODICE TRENO
                </div>
                <div class="col-2">
                    PARTENZA
                </div>
                <div class="col-2">
                    ARRIVO
                </div>
                <div class="col-2">
                    ORARIO DI PARTENZA
                </div>
                <div class="col-1">
                    RITARDI
                </div>
                <div class="col-3">
                    AZIENDA
                </div>
            </article>
            @foreach($trains as $train)
            <article class="row border border-dark">
                <div class="col-1">
                    {{$train->codice_treno}}
                </div>
                <div class="col-2">
                    {{$train->stazione_di_partenza}}
                </div>
                <div class="col-2">
                    {{$train->stazione_di_arrivo}}
                </div>
                <div class="col-2">
                    {{$train->orario_di_partenza}}
                </div>
                @if(!$train->cancellato)
                <div class="col-1">
                    {{$train->in_orario ? "in orario" : "in ritardo"}}
                </div>
                @else
                <div class="col-1">
                    cancellato
                </div>
                @endif
                <div class="col-3">
                    {{$train->azienda}}
                </div>
            </article>

        @endforeach
        </section>

    </main>
</body>
</html>