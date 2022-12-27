<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>MiltonAguirre - Divisas</title>
</head>

<body>
    <main class="my-0 py-0">
        <div class="container min-vh-100">
            <div class="p-5 text-center bg-light" style="margin-top: 58px;">
                <h1 class="mb-3">BSLab Challenge</h1>
                <h5 class="mb-3">Monitor de divisas</h5>
            </div>
            <section class="p-2">
                <h4>El Dolar en Argentina</h4>
                @foreach ($coins as $coin)
                    <div class="card text-bg-info m-2">
                        <div class="card-body">
                            <h4>{{ $coin['nombre'] }}</h4>
                            <div class="d-flex row col-md-8 offset-md-2">
                                <div class="col-md-6">
                                    <p>Compra: {{ $coin['compra'] }}</p>
                                </div>
                                <div class="col">
                                    <p>Venta: {{ $coin['venta'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </section>
        </div>
    </main>
</body>

</html>
