<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página expirada</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body style="background-color: #f4f6f9;">
    <div class="p-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card text-center p-0">
                    <div class="card-header text-bg-danger">
                        Enlace para reestablecer su contraseña
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">PÁGINA EXPIRADA</h3>
                        <p class="login-box-msg">
                            Haga click en el botón para volver al inicio
                        </p>
                        <a href="{{ route('home') }}" class="btn btn-primary btn-block">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
